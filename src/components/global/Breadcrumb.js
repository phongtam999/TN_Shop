import React from 'react';

function Breadcrumb(props) {
    return (
        <div className="row">
            <div className="col-lg-12">
                <div className="breadcrumb-trail breadcrumbs">
                    <ul className="trail-items breadcrumb">
                        <li className="trail-item trail-begin">
                            <a href="index.html">Home</a>
                        </li>
                        <li className="trail-item trail-end active">Grid Products</li>
                    </ul>
                </div>
            </div>
        </div>
    );
}

export default Breadcrumb;