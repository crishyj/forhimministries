@extends('layouts.app')

@section('content')
<div class="container salvation">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <div class="text-center pt-3 pb-3" >
                <img src="{{asset('assets/img/header/blog.png')}}" alt="">        
            </div>       
                   
            <div class="table-responsive py-4">
                <table class="table align-items-center table-flush text-center"  id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">{{ __('Blog Title') }}</th>                                   
                            <th scope="col" style="width: 150px">{{ __('Created')}}</th>
                        </tr>
                    </thead>
                    <tbody id="blog_body">
                        @foreach ($blogs as $option)
                            <tr>         
                                <input type="hidden" name="id" class="id" value="{{$option->id}}" />  
                                <input type="hidden" name="title" class="title" value="{{$option->title}}" />  
                                <input type="hidden" name="description" class="description" value="{{$option->description}}" />  

                                <td> {{$option->title}} </td>
                                <td> {{$option->created_at}} </td>   
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="blog_description text-center">
                Blog Detail
            </div>
            <div class="blogshow">
                <div class="blog_inner">
                    <div class="blog_title text-center pb-3">
                    </div>
                    <div class="blog_detail">

                    </div>
                </div>
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


        .blog_description{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            font-weight: 600;
            color: #3147AF;
            padding-top: 25px;
            padding-top: 15px;
            padding-bottom: 5px;
        }

        .blogshow{
            margin: auto;
            background-color: #4242e8;
            font-family: Arial;
            font-size: 14px;
            height: 300px;
            padding: 10px;
        }
        .blog_title{
            font-size: 18px;
            font-weight: 800
        }

        .blog_inner{
            margin: 10px, 0;
            background-color: #b9d8f7;
            color: #000000;
            height: 280px;
            padding: 10px;
            overflow-y: auto;
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
                    $('.blog_title').text('');
                    $('.blog_detail').html('');
                }
                else
                {
                    $(this).find(".title").each(function(){
                        $('.blog_title').text($(this).val());
                    });

                    $(this).find(".description").each(function(){
                        $('.blog_detail').html($(this).val());
                    });
                }
            });
        })
    </script>
@endpush