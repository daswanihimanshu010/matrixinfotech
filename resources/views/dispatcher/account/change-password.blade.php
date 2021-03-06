@extends('dispatcher.layout.base')

@section('title', 'Change Password ')

@section('content')

<div class="content-area py-1">
    <div class="container-fluid">
    	<div class="box box-block bg-white">

			<h5 style="margin-bottom: 2em;">@lang('admin.account.change_password')</h5>

            <form  action="{{route('dispatcher.password.update')}}" method="POST" role="form">
            	{{csrf_field()}}

            	<div class="field">
					<label for="old_password" class="column label">@lang('admin.account.old_password')</label>
					<div class="control">
						<input  class="input" type="password" name="old_password" id="old_password" placeholder="@lang('admin.account.old_password')">
					</div>
				</div>

				<div class="field">
					<label for="password" class="column label">@lang('admin.account.password')</label>
					<div class="control">
						<input  class="input" type="password" name="password" id="password" placeholder="@lang('admin.account.new_password')">
					</div>
				</div>

				<div class="field">
					<label for="password_confirmation" class="column label">@lang('admin.account.password_confirmation')</label>
					<div class="control">
						<input  class="input" type="password" name="password_confirmation" id="password_confirmation" placeholder="@lang('admin.account.retype_password')">
					</div>
				</div>

				<div class="field">
					<label for="zipcode" class="column label"></label>
					<div class="control">
						<button type="submit" class="button is-link">@lang('admin.account.change_password')</button>
					</div>
				</div>

			</form>
		</div>
    </div>
</div>

@endsection
