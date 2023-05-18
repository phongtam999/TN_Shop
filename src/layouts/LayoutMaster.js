import React from 'react';
import Header from '../includes/Header';
import Footer from '../includes/Footer';

function LayoutMaster({children}) {
    return (
        <>
            <Header />
            <div className="main-content main-content-product no-sidebar">
                <div className='container'>
                    {children}
                </div>
            </div>
            <Footer />
        </>
    );
}

export default LayoutMaster;