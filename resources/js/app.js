import "bootstrap/js/dist/alert";
import "bootstrap/js/dist/button";
import "bootstrap/js/dist/carousel";
import "bootstrap/js/dist/collapse";
import "bootstrap/js/dist/dropdown";
import "bootstrap/js/dist/modal";
// import 'bootstrap/js/dist/popover';
// import 'bootstrap/js/dist/scrollspy';
import "bootstrap/js/dist/tab";
// import "bootstrap/js/dist/toast";
import "bootstrap/js/dist/offcanvas";
// import 'bootstrap/js/dist/tooltip'

import {
    $,
    $$,
    getProductData,
    updateButtons,
    getStorageItemJSON,
    setStorageItem,
    copyToClipBoard,
} from "./functions";

let wishlist = getStorageItemJSON("wishlist");
let cart = getStorageItemJSON("cart");

const elsWishlistBtn = $$(".js-wishlist");
const elsCartBtn = $$(".js-cart");
const elWishlist = $("#wishlist");
const elCartlist = $("#cartlist");
const elsClipboard = $$(".js-clipboard");

const elHeader = $("#main-header");

document.body.style = `margin-top: ${
    elHeader.getBoundingClientRect().height
}px`;

elsClipboard?.forEach((el) => {
    el.addEventListener("click", () => {
        const input = el.nextElementSibling;
        copyToClipBoard(input);
    });
});

elWishlist.addEventListener("click", (evt) => {
    if (evt.target.matches(".js-delete-wishlistitem")) {
        console.log("hi");
        const id = evt.target.getAttribute("data-id");
        wishlist = wishlist.filter((x) => x.id !== id);
        setStorageItem("wishlist", wishlist);
        updateButtons(
            [$(`.product-links[data-id="${id}"] .js-wishlist`)],
            wishlist,
            "bi-heart-fill",
            "bi-heart",
            "#wishlist"
        );
    }
});

elCartlist.addEventListener("click", (evt) => {
    if (evt.target.matches(".js-delete-cartlistitem")) {
        console.log("hi");
        const id = evt.target.getAttribute("data-id");
        cart = cart.filter((x) => x.id !== id);
        setStorageItem("cart", cart);
        updateButtons(
            [$(`.product-links[data-id="${id}"] .js-cart`)],
            cart,
            "bi-bag-check-fill",
            "bi-bag",
            "#cartlist"
        );
    }
    if (evt.target.matches(".js-cart-quantity")) {
        const id = evt.target.getAttribute("data-id");
        const isIncrementButton = evt.target.matches(".js-increment");
        cart = cart.map((x) => {
            if (x.id === id) {
                if (isIncrementButton) {
                    x.quantity++;
                } else {
                    x.quantity !== 1 && x.quantity--;
                }
            }
            return x;
        });
        setStorageItem("cart", cart);
        updateButtons(
            [$(`.product-links[data-id="${id}"] .js-cart`)],
            cart,
            "bi-bag-check-fill",
            "bi-bag",
            "#cartlist"
        );
    }
});

updateButtons(
    elsWishlistBtn,
    wishlist,
    "bi-heart-fill",
    "bi-heart",
    "#wishlist"
);
elsWishlistBtn?.forEach((el) => {
    el.addEventListener("click", () => {
        const product = getProductData(el);
        console.log(product);
        if (!el.classList.contains("clicked")) {
            wishlist.push(product);
        } else {
            wishlist = wishlist.filter((x) => x.id !== product.id);
        }
        setStorageItem("wishlist", wishlist);
        updateButtons([el], wishlist, "bi-heart-fill", "bi-heart", "#wishlist");
    });
});

updateButtons(elsCartBtn, cart, "bi-bag-check-fill", "bi-bag", "#cartlist");
elsCartBtn?.forEach((el) => {
    el.addEventListener("click", () => {
        const product = getProductData(el);
        console.log(product);
        if (!el.classList.contains("clicked")) {
            cart.push(product);
        } else {
            cart = cart.filter((x) => x.id !== product.id);
        }
        setStorageItem("cart", cart);
        updateButtons([el], cart, "bi-bag-check-fill", "bi-bag", "#cartlist");
    });
});
