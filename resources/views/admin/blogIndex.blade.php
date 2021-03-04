@extends('layouts.admin_app', [
    'parentSection' => 'dashboards',
    'elementName' => 'dashboard'
])

@section('content')    
    <div class="mx-5 mt-8 pb-5">
    <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Blogs') }}</h3>
                            </div>                           
                            <div class="col-4 text-right">
                                <a href="{{route('blog.create')}}" class="btn btn-sm btn-primary">{{ __('Create Blog') }}</a>
                            </div>
                        </div>
                    </div>                   

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush text-center"  id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Blog Title') }}</th>                                   
                                    <th scope="col" style="width: 100px">{{ __('Created')}}</th>
                                    <th scope="col" style="width: 100px"></th>                                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $option)
                                    <tr>         
                                        <input type="hidden" name="id" class="id" value="{{$option->id}}" />  
                                        <input type="hidden" name="title" class="title" value="{{$option->title}}" />  
                                        <input type="hidden" name="description" class="description" value="{{$option->description}}" />  

                                        <td> {{$option->title}} </td>
                                        <td> {{$option->created_at}} </td>

                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a href="#" class="dropdown-item modal-btn2" data-id="{{$option->id}}" data-toggle="tooltip" data-placement="bottom" title="" data-modal="modal-1"><i class="fa fa-edit"></i>{{ __('Edit') }}</a>
                                                    <a href="{{route('blog.delete', $option->id)}}" onclick="return window.confirm('Are you sure?')" class="dropdown-item" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="" method="post" id="edit_form" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('Edit Blog')}}</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" class="id" id ="id" />
                        <div class="form-group">
                            <label for="title" class="font-weight-600"> {{ __('Blog Title')}} :</label>
                            <input type="text" name="title" id="title" class="form-control title" required>
                        </div>                        
                                
                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                            <label for="description">Blog Description</label>
                            <div class="input-group input-group-alternative mb-3">                                   
                                <textarea name="description" id="description" rows="5" cols="40" class="form-control description tinymce-editor {{ $errors->has('description') ? ' is-invalid' : '' }}" required>{{ old('description') }}</textarea>
                            </div>                            
                        </div>              
                    </div>              
                    
                    <div class="modal-footer">    
                        <button type="button" class="btn btn-primary btn-submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>&nbsp;{{ __('Save')}}</button>                       
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>&nbsp;{{ __('Close')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <style>
        #imageModal{
            margin-top: 5%;
        }

        #imageModal img{
            height: -webkit-fill-available;
        }

        #imageModal .modal-dialog .modal-content img{
            width: 100%;
        } 

        .modal-body img{
            width: 100%;
        }

        .tox-tinymce{
           width: 100%;
        }       
    </style>
@endpush

@push('js')
    <script src="{{ asset('argon') }}/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/datatables.net-select/js/dataTables.select.min.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>  
    <script type="text/javascript">
        tinymce.init({
            selector: 'textarea.tinymce-editor',
            height: 300,           
            menubar: false,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_css: '//www.tiny.cloud/css/codepen.min.css'
        });
    </script>
    <script>
        $(document).ready(function(){

            $(document).on('click', '.image_modal', function (){
                let product_image = $(this).parents('tr').find('.image').val().trim();
                $("#imageModal .product_image").attr("src", '../'+product_image);
                $("#imageModal").modal();
            });


            $(document).on('click', '.modal-btn2', function (){
                let id = $(this).data('id');
                let title = $(this).parents('tr').find('.title').val().trim();     
                let description = $(this).parents('tr').find('.description').val().trim(); 
                
                $("#edit_form .id").val(id);
                $("#edit_form .title").val(title);
                $("#edit_form .description").val(description);
                tinyMCE.activeEditor.setContent(description);
                $("#editModal").modal();
            });

            $("#edit_form .btn-submit").click(function(){
                let _token = $('input[name=_token]').val();
                let id = $('#id').val();
                let title = $('#title').val();
                let description = tinymce.get("description").getContent();

                var form_data =new FormData();
            
                form_data.append("_token", _token);
                form_data.append("id", id);
                form_data.append("title", title);
                form_data.append("description", description);

                $.ajax({
                    url: "{{route('blog.update')}}",
                    type: 'POST',
                    dataType: 'json',
                    data: form_data,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success : function(response) {
                        if(response == 'success') {  
                            window.location.reload();                          
                        } else {
                            let messages = response.data;
                            if(messages.option) {                               
                            }
                        }
                    },
                    error: function(response) {
                        $("#ajax-loading").fadeOut();
                        if(response.responseJSON.message == 'The given data was invalid.'){                            
                            let messages = response.responseJSON.errors;
                            if(messages.option) {                                
                            }
                            alert("Something went wrong");
                            window.location.reload();        
                        } else {
                            alert("Something went wrong");
                        }
                    }
                });
            });
        });
    </script>
@endpush
