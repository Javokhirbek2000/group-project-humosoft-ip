export function $(selector) {
    return document.querySelector(selector);
}

export function $$(selector) {
    return document.querySelectorAll(selector);
}

export function getStorageItemJSON(key) {
    const item = localStorage.getItem(key);
    if (!item) {
        localStorage.setItem(key, JSON.stringify([]));
        return JSON.parse(localStorage.getItem(key));
    } else {
        return JSON.parse(item);
    }
}

export function setStorageItem(key, value) {
    localStorage.removeItem(key);
    localStorage.setItem(key, JSON.stringify(value));
}

export function updateButtons(
    els,
    list,
    className,
    classNameToBeRemoved,
    target
) {
    els.forEach((el) => {
        const product = getProductData(el);
        const isLiked = list.find((x) => product.id === x.id);
        if (!isLiked) {
            el.classList.remove("clicked");
            el.firstElementChild.classList.remove(className);
            el.firstElementChild.classList.add(classNameToBeRemoved);
        } else {
            el.classList.add("clicked");
            el.firstElementChild.classList.add(className);
            el.firstElementChild.classList.remove(classNameToBeRemoved);
        }
    });
    $(`.badge[data-bs-target="${target}"]`).textContent = list.length;
    switch (target) {
        case "#wishlist":
            $(`${target} .list-group`).innerHTML = generateWishlistHTML(list);
            break;
        case "#cartlist":
            $(`${target} .list-group`).innerHTML = generateCartHTML(list);
            $(".js-cart-total").textContent = formatCurrency(
                list.reduce((a, b) => a + b.quantity * b.price, 0)
            );
            break;
        default:
            break;
    }
}

export function getProductData(targetButton, quantity) {
    const elDataTag = targetButton.parentElement.parentElement;
    if (!targetButton || !elDataTag) {
        return;
    }

    return {
        id: elDataTag.getAttribute("data-id"),
        name: elDataTag.getAttribute("data-name"),
        description: elDataTag.getAttribute("data-description"),
        price: elDataTag.getAttribute("data-price"),
        images: elDataTag.getAttribute("data-images").split(","),
        quantity: quantity || 1,
    };
}

function generateWishlistHTML(list) {
    let html = "";
    list.forEach((x) => {
        html += `<li class="list-group-item position-relative">
		<button type="button" data-id="${
            x.id
        }" class="button-small js-delete-wishlistitem rounded-circle shadow-sm position-absolute top-1 end-0 btn btn-danger btn-sm">
			<i data-id="${x.id}" class="bi bi-trash js-delete-wishlistitem "></i>
		</button>
		<div class="d-flex">
			<div class="flex-shrink-0">
				<img src="${x.images[0]}" alt="${x.name}" class="img-thumbnail square-75">
			</div>
			<div class="flex-grow-1 ms-3">
				<a href="/product/ad" class="mb-4 text-one-line h6 d-block">${x.name}</a>
				<div class="d-flex align-items-center justify-content-between">
					<p class="fs-6 mb-0 text-muted">${formatCurrency(x.price)}</p>
				</div>
			</div>
		</div>
	</li>`;
    });
    return html;
}

function generateCartHTML(list) {
    let html = "";
    list.forEach((x) => {
        html += `<li class="list-group-item position-relative">
		<button type="button" data-id="${
            x.id
        }" class="button-small js-delete-cartlistitem rounded-circle shadow-sm position-absolute top-1 end-0 btn btn-danger btn-sm">
			<i data-id="${x.id}" class="bi bi-trash js-delete-cartlistitem"></i>
		</button>
		<div class="d-flex">
			<div class="flex-shrink-0">
				<img src="${x.images[0]}" alt="${x.name}" class="img-thumbnail square-75">
			</div>
			<div class="flex-grow-1 ms-3">
				<a href="/product/ad" class="mb-4 text-one-line h6 d-block">${x.name}</a>
				<div class="d-flex align-items-center justify-content-between">
                    <div class="btn-group btn-group-sm">
                        <button data-id="${
                            x.id
                        }" type="button" class="btn btn-outline-primary py-0 js-cart-quantity js-decrement">-</button>
                        <span class="btn btn-outline-primary py-0 pe-none">${
                            x.quantity
                        }</span>
                        <button data-id="${
                            x.id
                        }" type="button" class="btn btn-outline-primary py-0 js-cart-quantity js-increment">+</button>
                    </div>
					<p class="fs-6 mb-0 text-muted">${formatCurrency(x.price)}</p>
				</div>
			</div>
		</div>
	</li>`;
    });
    return html;
}

function formatCurrency(price) {
    return `${parseInt(price, 10)?.toFixed(2)} $`;
}

export function copyToClipBoard(input) {
    input.select();
    input.setSelectionRange(0, 99999);
    document.execCommand("copy");
    console.log("copied");
}