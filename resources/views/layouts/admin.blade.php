<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>ESTUDIO ADMIN | @yield('title', 'ESTUDIO. ADMIN')</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css"/>

    <!-- Bootstrap Core Css -->
    <link href="{{ theme('backend/plugins/bootstrap/css/bootstrap.css') }}" rel="stylesheet"/>

    <!-- Waves Effect Css -->
    <link href="{{ theme('backend/plugins/node-waves/waves.css') }}" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="{{ theme('backend/plugins/animate-css/animate.css') }}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{ theme('backend/css/style.css') }}" rel="stylesheet"/>
    <!-- <link href="{{ theme('backend/css/table.css') }}" rel="stylesheet"> -->

    <!--  You can choose a theme from css/themes instead of get all themes -->
    <link href="{{ theme('backend/css/themes/all-themes.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ theme('backend/plugins/bootstrap-select/css/bootstrap-select.css') }} " rel="stylesheet" />

    <!-- Bootstrap Spinner Css -->
    <link href="{{ theme('backend/plugins/jquery-spinner/css/bootstrap-spinner.css') }}" rel="stylesheet"/>

    <!-- Bootstrap Tagsinput Css -->
    <link href="{{ theme('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}" rel="stylesheet"/>

    <!-- JQuery DataTable Css -->
    <link href="{{ theme('backend/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}" rel="stylesheet"/>

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ theme('backend/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{ theme('backend/plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <!-- Sweetalert Css -->
    <link href="{{ theme('backend/plugins/sweetalert/sweetalert.css') }}" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="{{ theme('backend/plugins/dropzone/dropzone.css') }}" rel="stylesheet"/>

    <!-- Multi Select Css -->
    <link href="{{ theme('backend/plugins/multi-select/css/multi-select.css') }}" rel="stylesheet"/>

    <!-- Bootstrap Select Css -->
    <link href="{{ theme('backend/plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="{{ theme('backend/plugins/nouislider/nouislider.min.css') }}" rel="stylesheet" />

    <!-- JQuery -->
    <script src="{{ theme('backend/js/jq.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>

    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Cairo');
        body{
            font-family: cairo;
        }
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.7.9/jquery.tinymce.min.js"></script>
    <!-- Jquery Start upload file -->
   

    <style>
        ul.cvf_uploaded_files {list-style-type: none; margin: 20px 0 0 0; padding: 0;}
        ul.cvf_uploaded_files li {background-color: #fff; border: 1px solid #ccc; border-radius: 5px; float: left; margin: 20px 20px 0 0; padding: 2px; width: 150px; height: 150px; line-height: 150px; position: relative;}
        ul.cvf_uploaded_files li img.img-thumb {width: 150px; height: 150px;}
        ul.cvf_uploaded_files .ui-selected {background: red;}
        ul.cvf_uploaded_files .highlight {border: 1px dashed #000; width: 150px; background-color: #ccc; border-radius: 5px;}
        ul.cvf_uploaded_files .delete-btn {width: 24px; border: 0; position: absolute; top: -12px; right: -14px;}
        .bg-success {padding: 7px;}
    </style>
    <script type="text/javascript">
        jQuery(document).ready(function() {         
            
            var storedFiles = [];      
            //$('.cvf_order').hide();
            
            // Apply sort function  
            function cvf_reload_order() {
                var order = $('.cvf_uploaded_files').sortable('toArray', {attribute: 'item'});
                $('.cvf_hidden_field').val(order);
            }
            
            function cvf_add_order() {
                $('.cvf_uploaded_files li').each(function(n) {
                    $(this).attr('item', n);
                });
                console.log('test');
            }
            
            
            $(function() {
                $('.cvf_uploaded_files').sortable({
                    cursor: 'move',
                    placeholder: 'highlight',
                    start: function (event, ui) {
                        ui.item.toggleClass('highlight');
                    },
                    stop: function (event, ui) {
                        ui.item.toggleClass('highlight');
                    },
                    update: function () {
                        //cvf_reload_order();
                    },
                    create:function(){
                        var list = this;
                        resize = function(){
                            $(list).css('height','auto');
                            $(list).height($(list).height());
                        };
                        $(list).height($(list).height());
                        $(list).find('img').load(resize).error(resize);
                    }
                });
                $('.cvf_uploaded_files').disableSelection();
            });
                    
            $('body').on('change', '.user_picked_files', function() {
                
                var files = this.files;
                var i = 0;
                            
                for (i = 0; i < files.length; i++) {
                    var readImg = new FileReader();
                    var file = files[i];
                    
                    if (file.type.match('image.*')){
                        storedFiles.push(file);
                        readImg.onload = (function(file) {
                            return function(e) {
                                $('.cvf_uploaded_files').append(
                                "<li file = '" + file.name + "'>" +                                 
                                    "<img class = 'img-thumb' src = '" + e.target.result + "' />" + 
                                    "<a href = '#' class = 'cvf_delete_image' title = 'Cancel'><img class = 'delete-btn' src = 'https://cdn0.iconfinder.com/data/icons/round-ui-icons/512/close_red.png' /></a>" + 
                                "</li>"
                                );      
                            };
                        })(file);
                        readImg.readAsDataURL(file);
                        
                    } else {
                        alert('the file '+ file.name + ' is not an image<br/>');
                    }
                    
                    if(files.length === (i+1)){
                        setTimeout(function(){
                            cvf_add_order();
                        }, 1000);
                    }
                }
            });
            
            // Delete Image from Queue
            $('body').on('click','a.cvf_delete_image',function(e){
                e.preventDefault();
                $(this).parent().remove('');        
                
                var file = $(this).parent().attr('file');
                for(var i = 0; i < storedFiles.length; i++) {
                    if(storedFiles[i].name == file) {
                        storedFiles.splice(i, 1);
                        break;
                    }
                }
                
                //cvf_reload_order();
                
            });
                           

        });
    </script>

    <!-- END UPLOAD FILE -->

    <!-- Jquery Core Js -->
    <script src="{{ theme('backend/js/tinymce/tinymce.min.js') }}"></script>
   <script>
      var editor_config = {
        path_absolute : "/public",
        selector: "textarea",
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };

      tinymce.init(editor_config);
    </script>


    <style type="text/css">
    /*****************************************
      upload button styles
    ******************************************/
    .file-upload {
        position: relative;
        display: inline-block;
    }

    .file-label {
      display: block;
      padding: 1em 2em;
      color: #fff;
      background: #222;
      border-radius: .4em;
      transition: background .3s;
      
      &:hover {
         cursor: pointer;
         background: #000;
      }
    }
    
    .file-input {
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        bottom: 0;
        font-size: 1;
        width:100%;
        height: 100%;
        opacity: 0;
    }


    .thumb {
        width: 150px;
        margin: 0.2em -0.7em 0 0;
    }
    .remove_img_preview {
        position:relative;
        
    }
    .remove_img_preview:before {
        content: "×";
    }
    </style>



</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->


    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ url('admin') }}"><b style="font-size: 24px;">E-Studio.</b> ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <!-- Removed serchbar -->
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{theme('backend/images')}}/user.png" width="48" height="48" alt="User" />
                </div>

                    @if(Auth::guest())
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            <li><a href="{{ url('/login') }}">{{ trans('lang.login') }}</a></li>
                            <li><a href="{{ url('/register') }}">{{ trans('lang.register') }}</a></li>   
                        </ul>
                    @else()
                        <div class="info-container">
                            <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} </div>
                            <div class="email">{{ Auth::user()->email }} </div>
                            <div class="btn-group user-helper-dropdown">
                                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                                <ul class="dropdown-menu pull-right">
                                    <li><a class=""  href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ trans('lang.logout') }}
                                        </a>
                                    </li>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                                </ul>
                            </div>
                        </div>

                    @endif()
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header active">MAIN NAVIGATION</li>

                    <li class="demo-color-box bg-blue-grey">
                        <a target="_new" href="{{ url('/') }}">
                            <i class="material-icons color-icon-green" style="color: #fff !important;">computer</i>
                            <span style="color: #fff !important;">Home Page</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/admin') }}">
                            <i class="material-icons color-icon-green">apps</i>
                            <span>{{ trans('lang.dashbord')}}</span>
                        </a>
                    </li>

                    <!-- Start Page -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons color-icon-red">content_copy</i>
                            <span>{{ trans('lang.pages')}}</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/admin/pages')}}">{{ trans('lang.allpages')}}</a>
                            </li>

                            <li>
                                <a href="{{ url('/admin/pages/create')}}">{{ trans('lang.addnewpage')}}</a>
                            </li>                            
                        </ul>
                    </li>

                    <!-- Start blog -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons color-icon-red">business_center</i>
                            <span>{{ trans('lang.portfolio')}}</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <i class="material-icons color-icon-red">image</i>
                                    <span>{{ trans('lang.portfoioimage')}}</span>
                                </a>
                                <ul class="ml-menu" style="display: none;">
                                    <li>
                                        <a href="{{ url('/admin/portfolios')}}">{{ trans('lang.allports')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/portfolios/create')}}">{{ trans('lang.addnewport')}}</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <i class="material-icons color-icon-red">work</i>
                                    <span>{{ trans('lang.portcats')}}</span>
                                </a>
                                <ul class="ml-menu" style="display: none;">
                                    <li>
                                        <a href="{{ url('/admin/portcats')}}">{{ trans('lang.allportcats')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/portcats/create')}}">{{ trans('lang.addnewportcats')}}</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <!-- Start Slider -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons color-icon-red">view_carousel</i>
                            <span>Slider</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/admin/sliders')}}">{{ trans('lang.allsliders')}}</a>
                            </li>

                            <li>
                                <a href="{{ url('/admin/sliders/create')}}">{{ trans('lang.addnewslider')}}</a>
                            </li>                            
                        </ul>
                    </li>


                    <!-- Start blog -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                            <i class="material-icons color-icon-red">line_style</i>
                            <span>{{ trans('lang.blog')}}</span>
                        </a>
                        <ul class="ml-menu" style="display: none;">

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <i class="material-icons color-icon-red">note_add</i>
                                    <span>{{ trans('lang.post')}}</span>
                                </a>
                                <ul class="ml-menu" style="display: none;">
                                    <li>
                                        <a href="{{ url('/admin/posts')}}">{{ trans('lang.allposts')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/posts/create')}}">{{ trans('lang.addnewpost')}}</a>
                                    </li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                    <i class="material-icons color-icon-red">work</i>
                                    <span>{{ trans('lang.postcats')}}</span>
                                </a>
                                <ul class="ml-menu" style="display: none;">
                                    <li>
                                        <a href="{{ url('/admin/postcats')}}">{{ trans('lang.allpostcats')}}</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/admin/postcats/create')}}">{{ trans('lang.addnewpostcats')}}</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <!-- Start Client -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons color-icon-red">camera_roll</i>
                            <span>Gallary</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/admin/gallaries')}}">{{ trans('lang.allimages')}}</a>
                            </li>

                            <li>
                                <a href="{{ url('/admin/gallaries/create')}}">{{ trans('lang.addnewimage')}}</a>
                            </li>                            
                        </ul>
                    </li>

                    <!-- Start Client -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons color-icon-red">vibration</i>
                            <span>Client</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/admin/sliders')}}">{{ trans('lang.allsliders')}}</a>
                            </li>

                            <li>
                                <a href="{{ url('/admin/sliders/create')}}">{{ trans('lang.addnewslider')}}</a>
                            </li>                            
                        </ul>
                    </li>

                    <!-- Start Client -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons color-icon-red">local_laundry_service</i>
                            <span>Service</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/admin/services')}}">{{ trans('lang.allservices')}}</a>
                            </li>

                            <li>
                                <a href="{{ url('/admin/services/create')}}">{{ trans('lang.addnewservice')}}</a>
                            </li>                            
                        </ul>
                    </li>

                    <!-- Start Team -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons color-icon-red">person</i>
                            <span>Team</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/admin/teams')}}">{{ trans('lang.allteams')}}</a>
                            </li>

                            <li>
                                <a href="{{ url('/admin/teams/create')}}">{{ trans('lang.addnewteam')}}</a>
                            </li>                            
                        </ul>
                    </li>

                
                    <!-- Start Setting -->
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons color-icon-red">settings</i>
                            <span>{{ trans('lang.settings')}}</span>
                        </a>

                        <ul class="ml-menu">
                            <li>
                                <a href="{{ url('/admin/settings')}}">{{ trans('lang.settings')}}</a>
                            </li>

                            <li>
                                <a href="{{ url('/admin/users') }}">{{ trans('lang.users')}}</a>
                            </li> 

                            <li>
                                <a href="{{ url('/admin/langs') }}">{{ trans('lang.languages')}}</a>
                            </li>                            
                        </ul>
                    </li>


                    
                    <!-- <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">content_copy</i>
                            <span>Example Pages</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../../pages/examples/sign-in.html">Sign In</a>
                            </li>
                            <li>
                                <a href="../../pages/examples/sign-up.html">Sign Up</a>
                            </li>
                            <li>
                                <a href="../../pages/examples/forgot-password.html">Forgot Password</a>
                            </li>
                            <li class="active">
                                <a href="../../pages/examples/blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="../../pages/examples/404.html">404 - Not Found</a>
                            </li>
                            <li>
                                <a href="../../pages/examples/500.html">500 - Server Error</a>
                            </li>
                        </ul>
                    </li> -->

                
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 - 2018 <a href="javascript:void(0);">ESTUDIO. ADMIN </a>
                    <br>
                    <a href="http://ramiawadallah.com" target="_new"> <b>By</b> Rami Awadallah</a>
                </div>
                <div class="version">
                    <b>Version: </b> 1.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>



    <section class="content">
        <div class="container-fluid">

                @if(count($errors)>0)

                    @foreach($errors->all() as $error)

                        <div id="ERROR_COPY" style="display: none;" class="alert alert-warning alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ $error }}
                        </div>

                    @endforeach()

                @endif()

                @include('partials.breadcrumbs')
    
            
                @yield('content')

        </div>
    </section>

    
    
    <!-- Jquery Core Js -->
    <script src="{{ theme('backend/plugins/jquery/jquery.min.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{ theme('backend/plugins/bootstrap/js/bootstrap.js')}}"></script>

    <!-- Select Plugin Js -->
    <script src="{{ theme('backend/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="{{ theme('backend/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="{{ theme('backend/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>

    <!-- Dropzone Plugin Js -->
    <script src="{{ theme('backend/plugins/dropzone/dropzone.js') }}"></script>

    <!-- Input Mask Plugin Js -->
    <script src="{{ theme('backend/plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>

    <!-- Multi Select Plugin Js -->
    <script src="{{ theme('backend/plugins/multi-select/js/jquery.multi-select.js') }}"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="{{ theme('backend/plugins/jquery-spinner/js/jquery.spinner.js') }}"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="{{ theme('backend/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

    <!-- noUISlider Plugin Js -->
    <script src="{{ theme('backend/plugins/nouislider/nouislider.js') }}"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="{{ theme('backend/plugins/node-waves/waves.js')}}"></script>

    <!-- TinyMCE -->
    <!-- <script src="{{ theme('backend/plugins/tinymce/tinymce.js') }}"></script> -->

    <!-- Moment Plugin Js -->
    <script src="{{ theme('backend/plugins/momentjs/moment.js') }}"></script>

    <!-- SweetAlert Plugin Js -->
    <script src="{{ theme('backend/plugins/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{ theme('backend/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="{{ theme('backend/plugins/jquery-datatable/jquery.dataTables.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/buttons.flash.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/jszip.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/pdfmake.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/vfs_fonts.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/buttons.html5.min.js') }}"></script>
    <script src="{{ theme('backend/plugins/jquery-datatable/extensions/export/buttons.print.min.js') }}"></script>

    <!-- Custom Js -->
    <script src="{{ theme('backend/js/admin.js')}}"></script>

    <!-- <script src="{{ theme('backend/js/pages/forms/editors.js') }}"></script> -->
    <script src="{{ theme('backend/js/pages/tables/jquery-datatable.js')}}"></script>
    <script src="{{ theme('backend/js/pages/forms/basic-form-elements.js') }}"></script>
    <script src="{{ theme('backend/js/pages/forms/advanced-form-elements.js') }}"></script>


    <script src="{{ theme('backend/js/jquery.imageuploader.js') }}"></script>
    

    <script>

        var has_errors = {{ $errors->count() > 0 ? 'true' : 'false' }};

        if(has_errors){
            swal({
                title: "Errors",
                text : "@foreach($errors->all() as $error) <ul class='btn btn-lg btn-block bg-pink waves-effect'>{{$error}}</ul> @endforeach()",
                type: "error",   
                html: jQuery("#ERROR_COPY").html(),
                showCancelButton: true,   
                confirmButtonColor: "#00BDFF",
            });
        };
        

    </script>

    <!-- <script>
        window.onload = function(){
            //Check File API support
            if(window.File && window.FileList && window.FileReader)
            {
                var filesInput = document.getElementById("files");
                
                filesInput.addEventListener("change", function(event){
                    
                    var files = event.target.files; //FileList object
                    var output = document.getElementById("result");
                    
                    for(var i = 0; i< files.length; i++)
                    {
                        var file = files[i];
                        
                        //Only pics
                        if(!file.type.match('image'))
                          continue;
                        
                        var picReader = new FileReader();
                        
                        picReader.addEventListener("load",function(event){
                            
                            var picFile = event.target;
                            
                            var div = document.createElement("div");
                            
                            div.innerHTML = "<img class='thumbnail img-responsive' src='" + picFile.result + "'" +
                                    "title='" + picFile.name + "'/>";
                            
                            output.insertBefore(div,null);            
                        
                        });
                        
                         //Read the image
                        picReader.readAsDataURL(file);
                    }                               
                   
                });
            }
            else
            {
                console.log("Your browser does not support File API");
            }
        }            
    </script> -->

    <script>
        $(function()
        {
            $(document).on('click', '.btn-add', function(e)
            {
                e.preventDefault();

                var controlForm = $('.controls:first'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('<span class="glyphicon glyphicon-minus"></span>');
            }).on('click', '.btn-remove', function(e)
            {
              $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });
        });
    </script>
    
</body>

</html>