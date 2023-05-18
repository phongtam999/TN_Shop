import React from 'react';
import Header from '../includes/Header';
import Footer from '../includes/Footer';

function LayoutHome({children}) {
    return (
        <>
            <Header />
            <div className="fullwidth-template">
                {children}
            </div>
            <Footer />
        </>
    );
}

export default LayoutHome;