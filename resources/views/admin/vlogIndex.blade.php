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
                           
                            <div class="col-4">
                                <h3 class="mb-0">{{ __('Vlogs') }}</h3>
                            </div>

                            <div class="col-4">
                              <div class="admin_header">
                                <img src="{{asset('assets/img/header/admin_vlog.png')}}" class="navbar-brand-img" alt="...">
                                </div>
                            </div>
                         
                            <div class="col-4 text-right">
                                <a href="{{route('vlog.create')}}" class="btn btn-sm btn-primary">{{ __('Create Vlog') }}</a>
                            </div>
                        </div>
                    </div>                   

                    <div class="table-responsive py-4">
                        <table class="table align-items-center table-flush text-center"  id="datatable-basic">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('Vlog Title') }}</th>                                   
                                    <th scope="col" style="width: 100px">{{ __('Created')}}</th>
                                    <th scope="col" style="width: 100px"></th>                                  
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vlogs as $option)
                                    <tr>         
                                        <input type="hidden" name="id" class="id" value="{{$option->id}}" />  
                                        <input type="hidden" name="title" class="title" value="{{$option->title}}" />  
                                        <input type="hidden" name="link" class="link" value="{{$option->link}}" />  

                                        <td> {{$option->title}} </td>
                                        <td> {{$option->created_at}} </td>

                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <a href="#" class="dropdown-item modal-btn2" data-id="{{$option->id}}" data-toggle="tooltip" data-placement="bottom" title="" data-modal="modal-1"><i class="fa fa-edit"></i>{{ __('Edit') }}</a>
                                                    <a href="{{route('vlog.delete', $option->id)}}" onclick="return window.confirm('Are you sure?')" class="dropdown-item" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Delete"><i class="fa fa-trash"></i> Delete</a>
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
                        <h4 class="modal-title">{{ __('Edit Vlog')}}</h4>
                        <button type="button" class="close" data-dismiss="modal">×</button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="id" class="id" id ="id" />
                        <div class="form-group">
                            <label for="title" class="font-weight-600"> {{ __('Vlog Title')}} :</label>
                            <input type="text" name="title" id="title" class="form-control title" required>
                        </div>        

                        <div class="form-group{{ $errors->has('link') ? ' has-danger' : '' }}">
                            <label for="link">Vlog video</label>
                            <div class="text-center">
                                <video controls id = "vlogVideo">
                                    <source src="" type="video/mp4" class="video_link">
                                    <source src="" type="video/ogg" class="video_link">
                                    Your browser does not support the video tag.
                                  </video>
                            </div>
                            <div class="input-group input-group-alternative mb-3">
                                <input class="form-control link" type="file" name="link" id ="link" required>
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

        #vlogVideo{
            width: 100%;
        }

        .admin_header img{
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
   
    <script>
        $(document).ready(function(){

            $(document).on('click', '.modal-btn2', function (){
                let id = $(this).data('id');
                let title = $(this).parents('tr').find('.title').val().trim();   
                let link = $(this).parents('tr').find('.link').val().trim(); 
                
                $("#edit_form .id").val(id);
                $("#edit_form .title").val(title);
                var video = document.getElementById('vlogVideo');
                video.src = link;
                $("#editModal").modal();
            });

            $("#edit_form .btn-submit").click(function(){
                let _token = $('input[name=_token]').val();
                let id = $('#id').val();
                let title = $('#title').val();
                var link = $('#link').prop('files')[0];
                var form_data =new FormData();
            
                form_data.append("_token", _token);
                form_data.append("id", id);
                form_data.append("title", title);
                form_data.append("link", link);
                form_data.append("upload_file", true);

                $.ajax({
                    url: "{{route('vlog.update')}}",
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
