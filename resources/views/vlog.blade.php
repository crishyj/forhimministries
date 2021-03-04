@extends('layouts.app')

@section('content')
<div class="container salvation">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="text-center pt-3 pb-3" >
                <img src="{{asset('assets/img/header/vlog.png')}}" alt="">        
            </div>       

            <div class="table-responsive py-4">
                <table class="table align-items-center table-flush text-center"  id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">{{ __('Vlog Title') }}</th>                                   
                            <th scope="col" style="width: 150px">{{ __('Created')}}</th>
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
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="vlog_part text-center">
                Vlog Detail
            </div>
            <div class="vlogshow">
                <video controls id = "vlogVideo">
                    <source src="" type="video/mp4" class="video_link">
                    <source src="" type="video/ogg" class="video_link">
                    Your browser does not support the video tag.
                </video>
            </div>
                   
        </div>
        <div class="col-sm-1"></div>
    </div>
</div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">   
    <style>
        #datatable-basic{
            color: #495057;
            background-color: #b9d8f7;
            border-color: #dee2e6;
        }

        .vlog_part{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            font-weight: 600;
            color: #3147AF;
            padding-top: 25px;
            padding-top: 15px;
            padding-bottom: 5px;
        }

        #vlogVideo{
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
            $("#datatable-basic tr").click(function(){
                if($(this).hasClass('selected')){
                    var video = document.getElementById('vlogVideo');
                    video.src = '';
                }
                else
                {
                    $(this).find(".title").each(function(){
                        $('.blog_title').text($(this).val());
                    });

                    $(this).find(".link").each(function(){
                        link = $(this).val();
                        var video = document.getElementById('vlogVideo');
                        video.src = link;
                    });
                }
            });
        })
    </script>
@endpush