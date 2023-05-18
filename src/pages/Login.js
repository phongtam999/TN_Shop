import React from 'react';
import LayoutMaster from '../layouts/LayoutMaster';

function Login(props) {
    return (
        <LayoutMaster>
            <div className="main-content main-content-login">
                <div className="container">
                    <div className="row align-items-center justify-content-center"> {/* Sử dụng align-items-center và justify-content-center để căn giữa */}
                        <div className="col-lg-6">
                            <div className="breadcrumb-trail breadcrumbs">
                                <ul className="trail-items breadcrumb">
                                    <li className="trail-item trail-begin">
                                        <a href="index.html">Home</a>
                                    </li>
                                    <li className="trail-item trail-end active">Authentication</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div className="row">
                        <div className="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div className="site-main">
                                <h3 className="custom_blog_title">Authentication</h3>
                                <div className="customer_login">
                                    <div className="row">
                                        <div className="col-lg-6 col-md-6 col-sm-12">
                                            <div className="login-item">
                                                <h5 className="title-login">Login your Account</h5>
                                                <form className="login">
                                                    <div className="social-account">
                                                        <h6 className="title-social">
                                                            Login with social account
                                                        </h6>
                                                        <a href="#" className="mxh-item facebook">
                                                            <i
                                                                className="icon fa fa-facebook-square"
                                                                aria-hidden="true"
                                                            />
                                                            <span className="text">FACEBOOK</span>
                                                        </a>
                                                        <a href="#" className="mxh-item twitter">
                                                            <i className="icon fa fa-twitter" aria-hidden="true" />
                                                            <span className="text">TWITTER</span>
                                                        </a>
                                                    </div>
                                                    <p className="form-row form-row-wide">
                                                        <label className="text">Username</label>
                                                        <input
                                                            title="username"
                                                            type="text"
                                                            className="input-text"
                                                        />
                                                    </p>
                                                    <p className="form-row form-row-wide">
                                                        <label className="text">Password</label>
                                                        <input
                                                            title="password"
                                                            type="password"
                                                            className="input-text"
                                                        />
                                                    </p>
                                                    <p className="lost_password">
                                                        <span className="inline">
                                                            <input type="checkbox" id="cb1" />
                                                            <label htmlFor="cb1" className="label-text">
                                                                Remember me
                                                            </label>
                                                        </span>
                                                        <a href="#" className="forgot-pw">
                                                            Forgot password?
                                                        </a>
                                                    </p>
                                                    <p className="form-row">
                                                        <input
                                                            type="submit"
                                                            className="button-submit"
                                                            defaultValue="login"
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
                </div>
            </div>
        </LayoutMaster>
    );
}

export default Login;