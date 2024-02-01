body {
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
  font-size: .8rem;
  background-color: #f0f2f5;
  line-height:1.5;
}

::-webkit-scrollbar-button {
  width: 0;
  height: 0;
  display: none;
}
::-webkit-scrollbar-corner {
  background-color: transparent;
}
::-webkit-scrollbar-thumb {
  height: 6px;
  border: 4px solid transparent;
  background-clip: padding-box;
  -webkit-border-radius: 7px;
  border-radius: 7px;
  background-color: rgba(0,0,0,.15);
  -webkit-box-shadow: inset -1px -1px 0 rgba(0,0,0,.05), inset 1px 1px 0 rgba(0,0,0,.05);
  box-shadow: inset -1px -1px 0 rgba(0,0,0,.05), inset 1px 1px 0 rgba(0,0,0,.05);
}
::-webkit-scrollbar {
  width:4px;
  background-color: #ffffff;
}
::-webkit-scrollbar-thumb {
  height: 50px;
  background: hsla(0, 0%, 53.3%, 0.4);
}
.schedule .nav-link {
  padding: 14px 0;
  text-align: center;
  line-height: 16px;
  font-size: 10px;
  text-transform: uppercase;
  font-weight: 500;
}
.schedule .nav-link p.mb-0.font-weight-bold {
  font-size: 13px;
}
.schedule .nav-link.active, .schedule .nav-link:focus {
  color: #28a744 !important;
}

/* Extra */
.small, small {
  font-size: 12px;
}

.account-setup video {
  width: 100%;
  position: absolute;
  z-index: -1;
  bottom: 0;
}

.btn-light {
  color: #212529 !important;
}

.back-page {
  font-size: 19px;
  vertical-align: bottom;
}

div,a {
  outline: none !important;
  text-decoration: none !important;
}

a:hover {
  color: #28a744;
}

.osahan-icofont {
  padding: 6px;
  background: black;
  border-radius: 50px;
  font-size: 18px;
  color: #fff;
  margin-right: 8px;
}

/* Detail Page */
.list-card-osahan-2 .img {
  width: 100%;
  border-radius: 5px;
  background: #fff;
  margin-bottom: 15px;
}

.pd-f a {
  height: 59px;
}

.rating-stars .icofont-star {
  font-size: 10px;
  background: #000000;
  color: #fff;
  padding: 2px;
  text-shadow: 0px 0px 1px #d2b128;
  border-radius: 5px;
}

.osahan-radio .btn {
  border-radius: 23px !important;
  font-size: 12px;
  margin: 0 4px 0 0px;
  border: 1px solid #ff6000;
  color: #ff6000;
  background: transparent;
  padding: 5px 11px;
}

.osahan-radio .btn.active {
  background: #ff6000 !important;
  border-color: #ff6000 !important;
}



.fixed-bottom-padding {
  padding-bottom: 59px;
}

.fixed-bottom-auto {
  height: auto !important;
}

.fixed-bottom {
  border-radius: 0px;
  box-shadow: 10px -1px 10px rgba(0, 0, 0, .075);
  height: 59px;
}
.fixed-bottom .btn, .fixed-bottom.btn {
  height: 59px;
  border-radius: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  font-weight: 500;
  padding: 12px 14px;
  border: none;
}
.fixed-bottom-bar {
  padding-bottom: 58px;
}
.h-auto {
  height: auto;
}
.modal-footer .btn {
  border-radius: 0px;
}
.slick-dots {
  bottom: 20px !important;
}
.landing-page .zindex {
  right: 0;
  z-index: 9;
}
/* Cart Page */
.sc-osahan-logo {
  height: 30px;
}
.index-osahan-logo {
  height: 90px;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
  border-radius: 17px;
}
.as-osahan-logo {
  width: 40px;
}
.osahan-logo {
  height: 30px;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
  border-radius: 17px;
}
.pp-osahan-logo {
  height: 30px;
}
.p-osahan-logo {
  height: 34px;
}
.gs-logo {
  height: 100px;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
  border-radius: 17px;
}

.border-custom-radio ::after {
  display: none;
}
.cart-items .img-fluid {
  width: 92px;
  height: 92px;
  object-fit: scale-down;
  min-width: 92px;
  padding: 7px;
  border-radius: 6px;
}
.cart-items-number .form-control {
  max-width: 30px;
  text-align: center;
  padding: 0px;
  height: 30px;
  border: none !important;
  background: transparent;
  color: #5d6671;
}
.cart-items-number .btn {
  width: 28px;
  background: #fff;
  height: 28px;
  border-radius: 50px !important;
  color: #ff6000;
  font-size: 17px;
  box-shadow: 0px 0px 3px #dedede;
  line-height: 18px;
  text-align: center;
  padding: 0px;
  margin: 0px !important;
  display: flex;
  align-items: center;
  justify-content: center;
  border: none !important;
}
.cart-items-number .btn:hover, .cart-items-number .btn:focus {
  background: #ff6000;
  color: #ffffff;
}
.cart-items-number .input-group-prepend {
  height: 28px;
  width: 28px;
}
.cart-items-number .input-group-append {
  height: 28px;
  width: 28px;
}
.cart-items-number {
  border-radius: 50px;
  padding: 3px;
  background: #f7f7f8;
  width: 90px;
  height: 34px;
}
/* List Page */
.border-custom-radio .custom-control-label::before {
  width: 100%;
  height: 100%;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  border-radius: .25rem!important;
  background: transparent !important;
  box-shadow: none !important;
}
.border-custom-radio .custom-control-input:checked~.custom-control-label::before {
  border-color: #28a744;
  border: 2px solid #28a744;
}
.list-card-image .price {
  font-size: 14px;
}
.list-card-image a.btn {
  border: 3px solid #f1f2f5;
  width: 33px;
  background: #fff;
  height: 33px;
  border-radius: 50px !important;
  color: #ff6000;
  font-size: 17px;
  box-shadow: 0px 0px 3px #dedede;
  line-height: 0px;
  text-align: center;
  padding: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
}
.list-card-image a.btn:hover, .list-card-image a.btn:focus {
  background: #ff6000;
  color: #ffffff;
}
/* Landing Page */
.landing-page .slick-dots {
  bottom: 80px !important;
}
.c-it p {
  font-size: 11px;
  overflow: hidden;
  text-overflow: ellipsis;
}
.c-it img {
  height: 40px;
}
.opt {
  font-size: 23px !important;
}
/* Bootstrap custom */
.bg-success {
/* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#28a745+0,5ad363+100 */
  background: #28a745;
 /* Old browsers */
  background: -moz-linear-gradient(-45deg,  #28a745 0%, #5ad363 100%);
 /* FF3.6-15 */
  background: -webkit-linear-gradient(-45deg,  #28a745 0%,#5ad363 100%);
 /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(135deg,  #28a745 0%,#5ad363 100%);
 /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#28a745', endColorstr='#5ad363',GradientType=1 );
 /* IE6-9 fallback on horizontal gradient */;
}
.btn-success {
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#28a745+0,5ad363+100 */
  background: #28a745;
 /* Old browsers */
  background: -moz-linear-gradient(-45deg,  #28a745 0%, #5ad363 100%);
 /* FF3.6-15 */
  background: -webkit-linear-gradient(-45deg,  #28a745 0%,#5ad363 100%);
 /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(135deg,  #28a745 0%,#5ad363 100%);
 /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#28a745', endColorstr='#5ad363',GradientType=1 );
 /* IE6-9 fallback on horizontal gradient */;
}
.btn-lg {
  font-size: 14px !important;
  padding: 12px 14px;
  font-weight: 500;
}
label {
  margin: 0 0 5px 0;
  font-size: 12px;
  color: #4a4949;
}
.form-label {
  margin: 0 0 5px 0;
  font-size: 12px;
  color: #4a4949;
  font-weight:bold;
}
.form-control {
  border-bottom: 1px solid #cacdd0;
  border-top:none;
  border-left:none;
  border-right:none;
  background-color: transparent;
  font-size: 12px;
  box-shadow: none !important;
  border-radius:0;
  height:calc(1.5em + .75rem + 2px);
}
.form-control:focus {
  border-color: #28a744;
}

.input-group .btn {
	border-radius: 0px;
	border: none;
}
.btn {
  font-size: 13px;
}
.btn.focus, .btn:focus {
  box-shadow: none !important;
}
.badge {
  font-size: 11px;
  padding: 7px 9px;
  font-weight: 500;
}
.badge-success {
  color: #28a745;
  background-color: rgb(40 167 69 / 15%);
}
.badge-warning {
  color: #eab002;
  background-color: rgb(255 193 7 / 15%);
}
.badge-danger {
  color: #ff6000;
  background-color: rgb(255 96 0 / 15%);
}
.badge-info {
  color: #17a2b8;
  background-color: rgb(23 162 184 / 15%);
}
.badge-primary {
  color: #007bff;
  background-color: rgb(0 123 255 / 15%);
}

.badge-dark {
  color: #343a40;
  background-color: rgb(52 58 64 / 15%);
}
.bg-danger {
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ff6000+0,f5bb50+100 */
  background: #ff6000;
 /* Old browsers */
  background: -moz-linear-gradient(-45deg,  #ff6000 0%, #f5bb50 100%);
 /* FF3.6-15 */
  background: -webkit-linear-gradient(-45deg,  #ff6000 0%,#f5bb50 100%);
 /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(135deg,  #ff6000 0%,#f5bb50 100%);
 /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff6000', endColorstr='#f5bb50',GradientType=1 );
 /* IE6-9 fallback on horizontal gradient */;
}

.bg-red {
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ff6000+0,f5bb50+100 */
  background: #ff0000;
 /* Old browsers */
  background: -moz-linear-gradient(-45deg,  #ff0000 0%, #e31f52 100%);
 /* FF3.6-15 */
  background: -webkit-linear-gradient(-45deg,  #ff0000 0%,#e31f52 100%);
 /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(135deg,  #ff0000 0%,#e31f52 100%);
 /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff0000', endColorstr='#e31f52',GradientType=1 );
 /* IE6-9 fallback on horizontal gradient */;
}
.bg-blue {
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#ff6000+0,f5bb50+100 */
  background: #2193b0 ;
 /* Old browsers */
  background: -moz-linear-gradient(-45deg,  #2193b0  0%, #6dd5ed 100%);
 /* FF3.6-15 */
  background: -webkit-linear-gradient(-45deg,  #2193b0  0%,#6dd5ed 100%);
 /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(135deg,  #2193b0  0%,#6dd5ed 100%);
 /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2193b0 ', endColorstr='#6dd5ed',GradientType=1 );
 /* IE6-9 fallback on horizontal gradient */;
}

.bg-info {
  /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#17a2b8+0,1a68ce+100 */
  background: #17a2b8;
 /* Old browsers */
  background: -moz-linear-gradient(-45deg,  #17a2b8 0%, #1a68ce 100%);
 /* FF3.6-15 */
  background: -webkit-linear-gradient(-45deg,  #17a2b8 0%,#1a68ce 100%);
 /* Chrome10-25,Safari5.1-6 */
  background: linear-gradient(135deg,  #17a2b8 0%,#1a68ce 100%);
 /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#17a2b8', endColorstr='#1a68ce',GradientType=1 );
 /* IE6-9 fallback on horizontal gradient */;
}
.modal-dialog {
  padding: 0px;
  margin: 0px;
  border: none !important;
  width: 100%;
  max-width: 100%;
}
.modal-content {
  border: none;
  border-radius: 0px;
  height: 100vh;
}
.modal-body {
  overflow: auto;
}

.rounded {
  border-radius: .40rem!important;
}
/* Filter */
.filter .custom-control-label::before {
  right: 1rem;
  left: auto;
  margin: auto;
  top: 0;
  bottom: 0;
}
.filter .custom-control-label::after {
  left: auto;
  right: 1rem;
  margin: auto;
  top: 0;
  bottom: 0;
}
.custom-control-input:checked~.custom-control-label::before {
  color: #fff;
  border-color: #28a744;
  background-color: #28a744;
}
/* Dark Mode */
.theme-switch-wrapper {
  position: fixed;
  bottom: 12px;
  right: 12px;
  z-index: 99999;
  width: 40px;
  height: 40px;
  border-radius: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.fixed-bottom-padding .theme-switch-wrapper {
  bottom: 70px;
}
.theme-switch {
  width: 40px;
  height: 40px;
  background: #000;
  color: #fff;
  border-radius: 50px;
  font-size: 20px;
  margin: 0px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
}
.dark .theme-switch {
  background: #fff;
  color: #000;
}

.theme-switch-wrapper em {
  display: none;
}
.theme-switch-wrapper #checkbox {
  display: none;
}
.dark body {
  background-color: #000;
  color: #ffffff;
}
.dark .bg-white {
  background-color: #1b1b1b!important;
}
.dark .border-bottom, .dark .border-top, .dark .border-left, .dark .border-right {
  border-color: #292929!important;
}
.dark .text-dark {
  color: #e4e4e4!important;
}
.dark .modal-content {
  background-color: #000;
}
.dark .bg-light {
  background-color: #101010!important;
}
.dark .modal-header {
  border-bottom: 1px solid #292929;
}
.dark .close {
  color: #fff !important;
}
.dark .btn {
  color: #ffffff;
}
.dark a.text-dark:focus, .dark a.text-dark:hover {
  color: #ffffff!important;
}
.dark .list-card-image a.btn, .dark .cart-items-number .btn {
  border: 3px solid #252525;
  background: #000;
  box-shadow: none;
}
.dark .cart-items-number {
  background: #000000;
}
.dark .hc-nav-trigger {
  color: #28a744;
}
.dark label {
  color: #ffffff;
}
.dark .hc-offcanvas-nav .nav-container, .dark .hc-offcanvas-nav .nav-wrapper, .dark .hc-offcanvas-nav ul {
  background: #25282e;
}
.dark .hc-offcanvas-nav li:not(.custom-content) a {
  color: #a3a6a9;
  background: rgba(0, 0, 0, 0);
  border-bottom: 1px solid #33353e;
}
.dark .hc-offcanvas-nav li:not(.custom-content) a:hover {
  color: #ffffff;
  background: #000000 !important;
  border-bottom: 1px solid #000000;
}
.dark .hc-offcanvas-nav li.nav-close a, .dark .hc-offcanvas-nav li.nav-back a {
  border-top: 1px solid #33353e;
  border-bottom: 1px solid #33353e;
}
.dark  .hc-offcanvas-nav .nav-item {
  background: rgba(0, 0, 0, 0);
  border-bottom: 1px solid #343a40;
}

.dark .hc-offcanvas-nav ul.bottom-nav {
  border-top: 1px solid #343a40;
}
.dark .form-control {
  border-bottom: 1px solid #333538;
  background-color: transparent !important;
  font-size: 13px;
  box-shadow: none !important;
  color: #fff;
}
.dark .text-muted {
  color: #99a2ab!important;
}
.dark .list-card-image img {
  margin: 0;
  background: #fff;
  padding: 17px;
  min-width: 100%;
  max-width: 100%;
  border-radius: 6px;
  box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
}
.dark .slick-dots li.slick-active button:before {
  opacity: .75;
  color: #fff;
}
.dark .slick-dots li button:before {
  color: #fff;
}
.dark .list-card-osahan-2 .img {
  width: 100%;
  padding: 22px;
  margin-bottom: 15px;
}
.dark .schedule .nav-link.active, .dark .schedule .nav-link:focus {
  color: #28a744 !important;
  background: #1b1b1b;
  border-color: #292929;
}
.dark .schedule .nav-link:hover{
  background: #1b1b1b;
  border-color: #292929;
}
.dark .nav-tabs {
  border-bottom: 1px solid #292929;
}