import React from 'react';
import LayoutMaster from "../layouts/LayoutMaster";

function SanPhamShow(props) {
    return (
        <LayoutMaster>
            <div className="main-content main-content-details single no-sidebar">
                <div className="container">
                    <div className="row">
                        <div className="col-lg-12">
                            <div className="breadcrumb-trail breadcrumbs">
                                <ul className="trail-items breadcrumb">
                                    <li className="trail-item trail-begin">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li className="trail-item">
                                        <a href="#">Accents</a>
                                    </li>
                                    <li className="trail-item trail-end active">Glorious Eau</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div className="row">
                        <div className="content-area content-details full-width col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <div className="site-main">
                                <div className="details-product">
                                    <div className="details-thumd">
                                        <div className="image-preview-container image-thick-box image_preview_container">
                                            <img
                                                id="img_zoom"
                                                data-zoom-image="/images/details-item-1.jpg"
                                                src="/images/details-item-1.jpg"
                                                alt="img"
                                            />
                                            <a href="#" className="btn-zoom open_qv">
                                                <i className="fa fa-search" aria-hidden="true" />
                                            </a>
                                        </div>
                                        <div className="product-preview image-small product_preview">
                                            <div
                                                id="thumbnails"
                                                className="thumbnails_carousel owl-carousel"
                                                data-nav="true"
                                                data-autoplay="false"
                                                data-dots="false"
                                                data-loop="false"
                                                data-margin={10}
                                                data-responsive='{"0":{"items":3},"480":{"items":3},"600":{"items":3},"1000":{"items":3}}'
                                            >
                                                <a
                                                    href="#"
                                                    data-image="/images/details-item-1.jpg"
                                                    data-zoom-image="/images/details-item-1.jpg"
                                                    className="active"
                                                >
                                                    <img
                                                        src="/images/details-item-1.jpg"
                                                        data-large-image="/images/details-item-1.jpg"
                                                        alt="img"
                                                    />
                                                </a>
                                                <a
                                                    href="#"
                                                    data-image="/images/details-item-2.jpg"
                                                    data-zoom-image="/images/details-item-2.jpg"
                                                >
                                                    <img
                                                        src="/images/details-item-2.jpg"
                                                        data-large-image="/images/details-item-2.jpg"
                                                        alt="img"
                                                    />
                                                </a>
                                                <a
                                                    href="#"
                                                    data-image="/images/details-item-3.jpg"
                                                    data-zoom-image="/images/details-item-3.jpg"
                                                >
                                                    <img
                                                        src="/images/details-item-3.jpg"
                                                        data-large-image="/images/details-item-3.jpg"
                                                        alt="img"
                                                    />
                                                </a>
                                                <a
                                                    href="#"
                                                    data-image="/images/details-item-4.jpg"
                                                    data-zoom-image="/images/details-item-4.jpg"
                                                >
                                                    <img
                                                        src="/images/details-item-4.jpg"
                                                        data-large-image="/images/details-item-4.jpg"
                                                        alt="img"
                                                    />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div className="details-infor">
                                        <h1 className="product-title">Glorious Eau</h1>
                                        <div className="stars-rating">
                                            <div className="star-rating">
                                                <span className="star-5" />
                                            </div>
                                            <div className="count-star">(7)</div>
                                        </div>
                                        <div className="availability">
                                            availability:
                                            <a href="#">in Stock</a>
                                        </div>
                                        <div className="price">
                                            <span>$45</span>
                                        </div>
                                        <div className="product-details-description">
                                            <ul>
                                                <li>Vestibulum tortor quam</li>
                                                <li>Imported</li>
                                                <li>Art.No. 06-7680</li>
                                            </ul>
                                        </div>
                                        <div className="variations">
                                            <div className="attribute attribute_color">
                                                <div className="color-text text-attribute">Color:</div>
                                                <div className="list-color list-item">
                                                    <a href="#" className="color1" />
                                                    <a href="#" className="color2" />
                                                    <a href="#" className="color3 active" />
                                                    <a href="#" className="color4" />
                                                </div>
                                            </div>
                                            <div className="attribute attribute_size">
                                                <div className="size-text text-attribute">Size:</div>
                                                <div className="list-size list-item">
                                                    <a href="#" className="">
                                                        xs
                                                    </a>
                                                    <a href="#" className="">
                                                        s
                                                    </a>
                                                    <a href="#" className="active">
                                                        m
                                                    </a>
                                                    <a href="#" className="">
                                                        l
                                                    </a>
                                                    <a href="#" className="">
                                                        xl
                                                    </a>
                                                    <a href="#" className="">
                                                        xxl
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div className="group-button">
                                            <div className="yith-wcwl-add-to-wishlist">
                                                <div className="yith-wcwl-add-button">
                                                    <a href="#">Add to Wishlist</a>
                                                </div>
                                            </div>
                                            <div className="size-chart-wrapp">
                                                <div className="btn-size-chart">
                                                    <a
                                                        id="size_chart"
                                                        href="/images/size-chart.jpg"
                                                        className="fancybox"
                                                    >
                                                        View Size Chart
                                                    </a>
                                                </div>
                                            </div>
                                            <div className="quantity-add-to-cart">
                                                <div className="quantity">
                                                    <div className="control">
                                                        <a
                                                            className="btn-number qtyminus quantity-minus"
                                                            href="#"
                                                        >
                                                            -
                                                        </a>
                                                        <input
                                                            type="text"
                                                            data-step={1}
                                                            data-min={0}
                                                            defaultValue={1}
                                                            title="Qty"
                                                            className="input-qty qty"
                                                            size={4}
                                                        />
                                                        <a href="#" className="btn-number qtyplus quantity-plus">
                                                            +
                                                        </a>
                                                    </div>
                                                </div>
                                                <button className="single_add_to_cart_button button">
                                                    Add to cart
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div className="tab-details-product">
                                    <ul className="tab-link">
                                        <li className="active">
                                            <a
                                                data-toggle="tab"
                                                aria-expanded="true"
                                                href="#product-descriptions"
                                            >
                                                Descriptions{" "}
                                            </a>
                                        </li>
                                        <li className="">
                                            <a data-toggle="tab" aria-expanded="true" href="#information">
                                                Information{" "}
                                            </a>
                                        </li>
                                        <li className="">
                                            <a data-toggle="tab" aria-expanded="true" href="#reviews">
                                                Reviews
                                            </a>
                                        </li>
                                    </ul>
                                    <div className="tab-container">
                                        <div id="product-descriptions" className="tab-panel active">
                                            <p>
                                                Quisque quis ipsum venenatis, fermentum ante volutpat, ornare
                                                enim. Phasellus molestie risus non aliquet cursus. Integer
                                                vestibulum mi lorem, id hendrerit ante lobortis non. Nunc ante
                                                ante, lobortis non pretium non, vulputate vel nisi. Maecenas
                                                dolor elit, fringilla nec turpis ac, auctor vulputate nulla.
                                                Phasellus sed laoreet velit.
                                            </p>
                                            <p>
                                                Proin fringilla urna vel mattis euismod. Etiam sodales, massa
                                                non tincidunt iaculis, mauris libero scelerisque justo, ut
                                                rutrum lectus urna sit amet quam. Nulla maximus vestibulum mi
                                                vitae accumsan.
                                            </p>
                                        </div>
                                        <div id="information" className="tab-panel">
                                            <table className="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td>Size</td>
                                                        <td> XS / S / M / L</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Color</td>
                                                        <td>White/ Black/ Teal/ Brown</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Properties</td>
                                                        <td>Colorful Dress</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="reviews" className="tab-panel">
                                            <div className="reviews-tab">
                                                <div className="comments">
                                                    <h2 className="reviews-title">
                                                        1 review for
                                                        <span>Glorious Eau</span>
                                                    </h2>
                                                    <ol className="commentlist">
                                                        <li className="conment">
                                                            <div className="conment-container">
                                                                <a href="#" className="avatar">
                                                                    <img src="/images/avartar.png" alt="img" />
                                                                </a>
                                                                <div className="comment-text">
                                                                    <div className="stars-rating">
                                                                        <div className="star-rating">
                                                                            <span className="star-5" />
                                                                        </div>
                                                                        <div className="count-star">(1)</div>
                                                                    </div>
                                                                    <p className="meta">
                                                                        <strong className="author">Cobus Bester</strong>
                                                                        <span>-</span>
                                                                        <span className="time">June 7, 2013</span>
                                                                    </p>
                                                                    <div className="description">
                                                                        <p>
                                                                            Simple and effective design. One of my
                                                                            favorites.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ol>
                                                </div>
                                                <div className="review_form_wrapper">
                                                    <div className="review_form">
                                                        <div className="comment-respond">
                                                            <span className="comment-reply-title">
                                                                Add a review{" "}
                                                            </span>
                                                            <form className="comment-form-review">
                                                                <p className="comment-notes">
                                                                    <span className="email-notes">
                                                                        Your email address will not be published.
                                                                    </span>
                                                                    Required fields are marked
                                                                    <span className="required">*</span>
                                                                </p>
                                                                <div className="comment-form-rating">
                                                                    <label>Your rating</label>
                                                                    <p className="stars">
                                                                        <span>
                                                                            <a className="star-1" href="#" />
                                                                            <a className="star-2" href="#" />
                                                                            <a className="star-3" href="#" />
                                                                            <a className="star-4" href="#" />
                                                                            <a className="star-5" href="#" />
                                                                        </span>
                                                                    </p>
                                                                </div>
                                                                <p className="comment-form-comment">
                                                                    <label>
                                                                        Your review
                                                                        <span className="required">*</span>
                                                                    </label>
                                                                    <textarea
                                                                        title="review"
                                                                        id="comment"
                                                                        name="comment"
                                                                        cols={45}
                                                                        rows={8}
                                                                        defaultValue={""}
                                                                    />
                                                                </p>
                                                                <p className="comment-form-author">
                                                                    <label>
                                                                        Name
                                                                        <span className="">*</span>
                                                                    </label>
                                                                    <input
                                                                        title="author"
                                                                        id="author"
                                                                        name="author"
                                                                        type="text"
                                                                        defaultValue=""
                                                                    />
                                                                </p>
                                                                <p className="comment-form-email">
                                                                    <label>
                                                                        Email
                                                                        <span className="">*</span>
                                                                    </label>
                                                                    <input
                                                                        title="email"
                                                                        id="email"
                                                                        name="email"
                                                                        type="email"
                                                                        defaultValue=""
                                                                    />
                                                                </p>
                                                                <p className="form-submit">
                                                                    <input
                                                                        name="submit"
                                                                        type="submit"
                                                                        id="submit"
                                                                        className="submit"
                                                                        defaultValue="Submit"
                                                                    />
                                                                </p>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style={{ clear: "left" }} />
                                <div className="related products product-grid">
                                    <h2 className="product-grid-title">You may also like</h2>
                                    <div
                                        className="owl-products owl-slick equal-container nav-center"
                                        data-slick='{"autoplay":false, "autoplaySpeed":1000, "arrows":true, "dots":false, "infinite":true, "speed":800, "rows":1}'
                                        data-responsive='[{"breakpoint":"2000","settings":{"slidesToShow":3}},{"breakpoint":"1200","settings":{"slidesToShow":2}},{"breakpoint":"992","settings":{"slidesToShow":2}},{"breakpoint":"480","settings":{"slidesToShow":1}}]'
                                    >
                                        <div className="product-item style-1">
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
                                                            <img src="/images/product-item-1.jpg" alt="img" />
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
                                                        <a href="#">Aluminum Plant</a>
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
                                        </div>
                                        <div className="product-item style-1">
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
                                                            <img src="/images/product-item-2.jpg" alt="img" />
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
                                        </div>
                                        <div className="product-item style-1">
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
                                                            <img src="/images/product-item-3.jpg" alt="img" />
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
                                                        <a href="#">Cuerpo Eau</a>
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
                                        </div>
                                        <div className="product-item style-1">
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
                                                            <img src="/images/product-item-4.jpg" alt="img" />
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </LayoutMaster>
    );
}

export default SanPhamShow;