import React from 'react';
import LayoutMaster from '../layouts/LayoutMaster';
import ProductItem from '../components/product/ProductItem';
import Pagination from '../components/product/Pagination';
import Breadcrumb from '../components/global/Breadcrumb';
import TopControl from '../components/product/TopControl';

function Shop(props) {
    return (
        <LayoutMaster>
            <>
                <Breadcrumb/>
                <div className="row">
                    <div className="content-area shop-grid-content full-width col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div className="site-main">
                            <h3 className="custom_blog_title">Grid Products</h3>
                           <TopControl/>
                            <ul className="row list-products auto-clear equal-container product-grid">
                                <ProductItem/>
                                <ProductItem/>
                                <ProductItem/>
                                <ProductItem/>
                            </ul>
                            <Pagination/>
                        </div>
                    </div>
                </div>
            </>

        </LayoutMaster>
    );
}

export default Shop;