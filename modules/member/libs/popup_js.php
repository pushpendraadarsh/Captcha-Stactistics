<style type="text/css">
     /* Modals
----------------------------------------------*/
a.link {cursor:help;text-decoration:underline;}
a.link.btn {border-color #d900ae;text-decoration none;}
a.link:hover {background-color: #0085a6; color: #fff; text-decoration:none;}

[data-ml-modal] {
  position:fixed;
  top:0;
  bottom:0;
  left:0;
  right:0;
  overflow-x:hidden;
  overflow-y:auto;
  -webkit-overflow-scrolling:touch;
  z-index:999;
  width:0;
  height:0;
  opacity:0;
}
[data-ml-modal]:target {
  width:auto;
  height:auto;
  opacity:1;
  -webkit-transition:  opacity 1s ease;
  transition: opacity 1s ease;
}
[data-ml-modal]:target .modal-overlay {
  position:fixed;
  top:0;
  bottom:0;
  left:0;
  right:0;
  cursor:pointer;
  background-color:#000;
  background-color:rgba(0, 0, 0, 0.7);
  z-index:1;
}
[data-ml-modal] .modal-dialog {
  border-radius:6px;
  box-shadow:0 11px 15px -7px rgba(0, 0, 0, 0.2), 0 24px 38px 3px rgba(0, 0, 0, 0.14), 0 9px 46px 8px rgba(0, 0, 0, 0.12);
  position:relative;
  width: 90%;
  max-width:660px;
  max-height:70%;
  margin:10% auto;
  overflow-x:hidden;
  overflow-y:auto;
  z-index:2;
}
.modal-dialog-lg {max-width:820px !important;}

[data-ml-modal] .modal-dialog > h3 {
  background-color:#eee;
  border-bottom:1px solid #b3b3b3;
  font-size:24px;
  font-weight: 400;
  margin:0;
  padding:0.8em 56px .8em 27px; 
}
[data-ml-modal] .modal-content {background:#fff; padding:23px 27px;}
[data-ml-modal] .modal-close {
    position:absolute;
  top:13px;
  right:13px;
  color:#0085a6;
  background-color:#fff;
  border-radius:50%;
  height:40px;
  width:40px;
  font-size:30px;
  line-height:37px;
  text-align:center;
  -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
}
[data-ml-modal] .modal-close:hover {background-color:#0085a6; color:#fff; cursor:pointer;}
[data-ml-modal] p:first-child, [data-ml-modal] p:last-child {margin:0;}
@media (max-width:767px) {
  [data-ml-modal] .modal-dialog {margin:20% auto;}
}
/* End Modals ------------------------------*/

/* General*/

*, *:before, *:after {
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
      box-sizing: border-box;
}

a {
  color:#0085a6;
  text-decoration: none;
  outline: 0;
  -webkit-transition  all .3s ease-in-out;
  -moz-transition  all .3s ease-in-out;
  -o-transition  all .3s ease-in-out;
  transition all .3s ease-in-out;
}
a:hover {
  color:#0085a6;
  text-decoration: none;
}
.center {text-align:center !important;}
.btn {
    display: inline-block;
    margin-bottom: 0;
    font-weight: normal;
    text-align: center;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    background-image: none;
    border: 2px solid transparent;
    white-space: normal;
    padding: 3px 14px;
    font-size: 18px;
    border-radius: 3px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.btn-default {border-color: #0085a6;}
a.btn-default:hover {background-color:#0085a6; color:#fff;}
pre {overflow:auto;font-size:1em;}
    </style>


    <div data-ml-modal id="modal-10">
  <a href="main" class="modal-overlay"></a>
  <div class="modal-dialog modal-dialog-lg">
    <a href="main" class="modal-close">&times;</a>
    <h3 id="exit_sucess"></h3>
    <h3 style="color: red; background-color: yellow;">REQUEST NO. IS: <?php echo $randumnum ?></h3>
  </div>
</div>
