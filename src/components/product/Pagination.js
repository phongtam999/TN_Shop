import React from 'react';

function Pagination(props) {
    return (
        <div className="pagination clearfix style2">
            <div className="nav-link">
                <a href="#" className="page-numbers">
                    <i className="icon fa fa-angle-left" aria-hidden="true" />
                </a>
                <a href="#" className="page-numbers">
                    1
                </a>
                <a href="#" className="page-numbers">
                    2
                </a>
                <a href="#" className="page-numbers current">
                    3
                </a>
                <a href="#" className="page-numbers">
                    <i className="icon fa fa-angle-right" aria-hidden="true" />
                </a>
            </div>
        </div>
    );
}

export default Pagination;