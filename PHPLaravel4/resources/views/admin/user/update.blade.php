@extends('admin.admin')
@section('title', "Thêm tài khoản")
@section('content')
    <div class="m-content">
        <div class="row">
            <div class="col-xl-12">
                <div class="m-portlet m-portlet--full-height">
                    <div class="m-wizard m-wizard--2 m-wizard--success m-wizard--step-first" id="m_wizard">
                        <div class="m-wizard__form">
                            <div class="m-form m-form--label-align-left- m-form--state-" id="m_form">
                                <form action="{{route('update.user',['id'=>$User])}}" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                    @csrf
                                    <div class="m-portlet__body">
                                        @if(count($errors) > 0)
                                            <div class="alert alert-danger">
                                                @foreach($errors->all() as $err)
                                                    {{$err}}<br />
                                                @endforeach
                                            </div>
                                        @endif
                                        @if(session('Notification'))
                                            <div class="alert alert-success">
                                                {{session('Notification')}}
                                            </div>
                                        @endif
                                        <div class="m-wizard__form-step--current" id="m_wizard_form_step_1">
                                            <div class="row">
                                                <div class="col-md-12 mt-4">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title" style="font-weight: bold">
                                                            Người dùng: <a style="color: #ff0000;">{{$User->name}}</a>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="m-form__section m-form__section--first">
                                                        <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label"><span
                                                                    class="text-danger">*</span> Hình ảnh: </label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                <input type="file" name="Hinhanh" class="form-control m-input name-field"
                                                                       placeholder="Điền tiêu đề" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label"><span
                                                                    class="text-danger">*</span> Họ tên đệm: </label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                <input type="text" name="Hotendem" class="form-control m-input name-field"
                                                                       placeholder="Điền họ tên đệm" value="{{$User->username}}"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label"><span
                                                                    class="text-danger">*</span> Tên: </label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                <input type="text" name="NameND" class="form-control m-input name-field"
                                                                       placeholder="Điền tên người dùng" value="{{$User->name}}" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label"><span
                                                                    class="text-danger">*</span> Số điện thoại: </label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                <input type="text" name="Sđt" class="form-control m-input name-field"
                                                                       placeholder="Điền số điện thoại" value="{{$User->phoneNumber}}"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="m-form__section m-form__section--first">
                                                        <img style="margin-left: 50%" width="100px" src="{!! asset('image/'.$User->avatar) !!}">
                                                        <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label"><span
                                                                    class="text-danger">*</span> Email: </label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                <input type="text" name="Email" class="form-control m-input name-field"
                                                                       placeholder="Điền Email" value="{{$User->email}}" readonly/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group m-form__group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label"><span
                                                                    class="text-danger">*</span>Quyền:</label>
                                                            <div class="col-xl-9 col-lg-9">
                                                                <select class="form-control select2" name="Level" id="Loaitinid">
                                                                    <option value="">Chọn</option>
                                                                    <option value="0" selected
                                                                    @if($User->level == 0)
                                                                        {{"selected"}}
                                                                        @endif>Người dùng</option>
                                                                    <option value="1"
                                                                    @if($User->level == 1)
                                                                        {{"selected"}}
                                                                        @endif>Quản lý</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-md-12 d-flex justify-content-end">
                                                <div class="m-form__actions">
                                                    <a href="{{route('show.user')}}"><button type="button" class="btn btn-danger">Hủy</button></a>
                                                    <button type="submit" class="btn btn-success">Sửa</button>
                                                </div>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
