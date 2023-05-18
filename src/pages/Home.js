import React from 'react';
import HomeSlider from '../components/home/HomeSlider';
import ProductFeatured from '../components/home/ProductFeatured';
import ProductTab from '../components/home/ProductTab';
import WhyUs from '../components/home/WhyUs';
import LayoutHome from '../layouts/LayoutHome';

function Home(props) {
    return (
        <LayoutHome>
            <HomeSlider/>
            <ProductFeatured/>
            <ProductTab/>
            <WhyUs/>
        </LayoutHome>
    );
}

export default Home;