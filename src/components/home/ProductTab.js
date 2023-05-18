import React from 'react';

function ProductTab(props) {
    return (
        <>
            <div className="stelina-tabs product-tab  default rows-space-40">
                <div className="container">
                    <div className="tab-head">
                        <ul className="tab-link">
                            <li className="active">
                                <a data-toggle="tab" aria-expanded="true" href="#bestseller">
                                    Bestseller
                                </a>
                            </li>
                            <li className="">
                                <a data-toggle="tab" aria-expanded="true" href="#new_arrivals">
                                    New Arrivals{" "}
                                </a>
                            </li>
                            <li className="">
                                <a data-toggle="tab" aria-expanded="true" href="#top-rated">
                                    Top Rated
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div className="tab-container">
                        <div id="bestseller" className="tab-panel active">
                            <div className="stelina-product">
                                <ul className="row list-products auto-clear equal-container product-grid">
                                    <li className="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-1.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Blanche Parfum</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-2.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Tuscan Creations</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-3.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Terra Rossa</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-4.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Glorious Eau</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-5.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">The Alchemist</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-6.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Garden A Winter </a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-7.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Melody Eau</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-8.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Toilette</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="new_arrivals" className="tab-panel">
                            <div className="stelina-product">
                                <ul className="row list-products auto-clear equal-container product-grid">
                                    <li className="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-9.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Ambre Royal</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-10.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Patiala Eau</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-11.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Mojave Ghost</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-13.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Rose Elixir</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-14.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Aoud Queen Roses</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-15.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Love Eau</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-16.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Bibliotheque</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-2.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Tuscan Creations</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="top-rated" className="tab-panel">
                            <div className="stelina-product">
                                <ul className="row list-products auto-clear equal-container product-grid">
                                    <li className="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-10.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Patiala Eau</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-12.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Bal Afrique</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-8.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Exotic Diamond</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-4.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Mon Guerlain </a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-9.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Dainty Diamond</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-13.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Magnificent Bangle</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item product-type-variable col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-16.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">Florale</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li className="product-item  col-lg-3 col-md-4 col-sm-6 col-xs-6 col-ts-12 style-1">
                                        <div className="product-inner equal-element">
                                            <div className="product-top">
                                                <div className="flash">
                                                    <span className="onnew">
                                                        <span className="text">new</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div className="product-thumb">
                                                <div className="thumb-inner">
                                                    <a href="#">
                                                        <img
                                                            src="images/product-item-8.jpg"
                                                            alt="img"
                                                        />
                                                    </a>
                                                    <div className="thumb-group">
                                                        <div className="yith-wcwl-add-to-wishlist">
                                                            <div className="yith-wcwl-add-button">
                                                                <a href="#">Add to Wishlist</a>
                                                            </div>
                                                        </div>
                                                        <a href="#" className="button quick-wiew-button">
                                                            Quick View
                                                        </a>
                                                        <div className="loop-form-add-to-cart">
                                                            <button className="single_add_to_cart_button button">
                                                                Add to cart
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div className="product-info">
                                                <h5 className="product-name product_title">
                                                    <a href="#">The Alchemist</a>
                                                </h5>
                                                <div className="group-info">
                                                    <div className="stars-rating">
                                                        <div className="star-rating">
                                                            <span className="star-3" />
                                                        </div>
                                                        <div className="count-star">(3)</div>
                                                    </div>
                                                    <div className="price">
                                                        <del>$65</del>
                                                        <ins>$45</ins>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    );
}

export default ProductTab;