@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.loan.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.loans.store') }}" enctype="multipart/form-data">
            @csrf
            <hr />
            <div class="row" style="background-color:  #cccccc;">
            <h3> Loans Details </h3>
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="borrower">{{ trans('cruds.loan.fields.borrower') }}</label>
                <input class="form-control {{ $errors->has('borrower') ? 'is-invalid' : '' }}" type="text" name="borrower" id="borrower" value="{{ $user }}" readonly>
                @if($errors->has('borrower'))
                    <span class="text-danger">{{ $errors->first('borrower') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="lproduct">{{ trans('cruds.loan.fields.lproduct') }}</label>
                <select class="form-control select2 {{ $errors->has('lproduct') ? 'is-invalid' : '' }}" name="lproduct" id="income_category_id" required>
                    @foreach($products as $id => $income_category)
                        <option value="{{ $id }}" {{ old('income_category_id') == $id ? 'selected' : '' }}>{{ $income_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('lproduct'))
                    <span class="text-danger">{{ $errors->first('lproduct') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="loan_amount">{{ trans('cruds.loan.fields.loan_amount') }}</label>
                <input class="form-control {{ $errors->has('loan_amount') ? 'is-invalid' : '' }}" type="text" name="loan_amount" id="loan_amount" value="{{ old('loan_amount', '') }}" required>
                @if($errors->has('loan_amount'))
                    <span class="text-danger">{{ $errors->first('loan_amount') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="duration">{{ trans('cruds.loan.fields.duration') }}</label>
                <select class="form-control select2 {{ $errors->has('duration') ? 'is-invalid' : '' }}" name="duration" id="duration" required>
                    @foreach($durations as $id => $income_category)
                        <option value="{{ $id }}" {{ old('income_category_id') == $id ? 'selected' : '' }}>{{ $income_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('duration'))
                    <span class="text-danger">{{ $errors->first('duration') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="income">{{ trans('cruds.loan.fields.income') }}</label>
                <input class="form-control {{ $errors->has('income') ? 'is-invalid' : '' }}" type="text" name="income" id="income" value="{{ old('income', '') }}" required>
                @if($errors->has('income'))
                    <span class="text-danger">{{ $errors->first('income') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="salary_acc_no">{{ trans('cruds.loan.fields.salary_acc_no') }}</label>
                <input class="form-control {{ $errors->has('salary_acc_no') ? 'is-invalid' : '' }}" type="text" name="salary_acc_no" id="salary_acc_no" value="{{ old('salary_acc_no', '') }}" required>
                @if($errors->has('salary_acc_no'))
                    <span class="text-danger">{{ $errors->first('salary_acc_no') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="bvn">{{ trans('cruds.loan.fields.bvn') }}</label>
                <input class="form-control {{ $errors->has('bvn') ? 'is-invalid' : '' }}" type="text" name="bvn" id="bvn" value="{{ old('bvn', '') }}" required>
                @if($errors->has('bvn'))
                    <span class="text-danger">{{ $errors->first('bvn') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="pay_date">{{ trans('cruds.loan.fields.pay_date') }}</label>
                <input class="form-control {{ $errors->has('pay_date') ? 'is-invalid' : '' }}" type="date" name="pay_date" id="pay_date" value="{{ old('pay_date', '') }}" required>
                @if($errors->has('pay_date'))
                    <span class="text-danger">{{ $errors->first('pay_date') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="repayment_source">{{ trans('cruds.loan.fields.repayment_source') }}</label>
                <input class="form-control {{ $errors->has('repayment_source') ? 'is-invalid' : '' }}" type="text" name="repayment_source" id="repayment_source" value="{{ old('repayment_source', '') }}" required>
                @if($errors->has('repayment_source'))
                    <span class="text-danger">{{ $errors->first('repayment_source') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="employment_status">{{ trans('cruds.loan.fields.employment_status') }}</label>
                <select class="form-control select2 {{ $errors->has('employment_status') ? 'is-invalid' : '' }}" name="employment_status" id="employment_status" required>
                    @foreach($empstatus as $id => $income_category)
                        <option value="{{ $id }}" {{ old('income_category_id') == $id ? 'selected' : '' }}>{{ $income_category }}</option>
                    @endforeach
                </select>
                @if($errors->has('employment_status'))
                    <span class="text-danger">{{ $errors->first('employment_status') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="employer">{{ trans('cruds.loan.fields.employer') }}</label>
                <input class="form-control {{ $errors->has('employer') ? 'is-invalid' : '' }}" type="text" name="employer" id="employer" value="{{ old('employer', '') }}">
                @if($errors->has('employer'))
                    <span class="text-danger">{{ $errors->first('employer') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="employer_address">{{ trans('cruds.loan.fields.employer_address') }}</label>
                <input class="form-control {{ $errors->has('employer_address') ? 'is-invalid' : '' }}" type="text" name="employer_address" id="employer_address" value="{{ old('employer_address', '') }}">
                @if($errors->has('employer_address'))
                    <span class="text-danger">{{ $errors->first('employer_address') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                    <label  for="image">Upload Your Passport Photo</label>
                    <div class="col-md-12">
                        <input id="image" name="image" type="file"  class="form-control" multiple>
                    </div>
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <label  for="image1">Upload Your Valid ID Card</label>
                    <div class="col-md-12">
                        <input id="image1" name="image1" type="file"  class="form-control" multiple>
                    </div>
                </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="existing_loan">Do you have an Existing Loan</label>
                <input class="form-control {{ $errors->has('existing_loan') ? 'is-invalid' : '' }}" type="text" name="existing_loan" id="existing_loan" value="{{ old('existing_loan', '') }}" required>
                @if($errors->has('existing_loan'))
                    <span class="text-danger">{{ $errors->first('existing_loan') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="existing_loan_balance">{{ trans('cruds.loan.fields.existing_loan_balance') }}</label>
                <input class="form-control {{ $errors->has('existing_loan_balance') ? 'is-invalid' : '' }}" type="text" name="existing_loan_balance" id="existing_loan_balance" value="{{ old('existing_loan_balance', '') }}">
                @if($errors->has('existing_loan_balance'))
                    <span class="text-danger">{{ $errors->first('existing_loan_balance') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="monthly_rental">{{ trans('cruds.loan.fields.monthly_rental') }}</label>
                <input class="form-control {{ $errors->has('monthly_rental') ? 'is-invalid' : '' }}" type="text" name="monthly_rental" id="monthly_rental" value="{{ old('monthly_rental', '') }}">
                @if($errors->has('monthly_rental'))
                    <span class="text-danger">{{ $errors->first('monthly_rental') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="tenure_end_date">{{ trans('cruds.loan.fields.tenure_end_date') }}</label>
                <input class="form-control {{ $errors->has('tenure_end_date') ? 'is-invalid' : '' }}" type="date" name="tenure_end_date" id="tenure_end_date" value="{{ old('tenure_end_date', '') }}" required>
                @if($errors->has('tenure_end_date'))
                    <span class="text-danger">{{ $errors->first('tenure_end_date') }}</span>
                @endif
            </div>
            <hr />
           <h3> Guarantor's Details </h3>
            <div class="form-group col-md-6 col-xs-12">
                <label for="g_name">{{ trans('cruds.loan.fields.g_name') }}</label>
                <input class="form-control {{ $errors->has('bvn') ? 'is-invalid' : '' }}" type="text" name="g_name" id="g_name" value="{{ old('g_name', '') }}" required>
                @if($errors->has('g_name'))
                    <span class="text-danger">{{ $errors->first('g_name') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label class="required" for="gender_id">Guarantor's Gender</label>
                <select class="form-control select2 {{ $errors->has('g_gender') ? 'is-invalid' : '' }}" name="g_gender" id="g_gender" required>
                    @foreach($genders as $id => $gender)
                        <option value="{{ $id }}" {{ old('gender_id') == $id ? 'selected' : '' }}>{{ $gender }}</option>
                    @endforeach
                </select>
                @if($errors->has('g_gender'))
                    <span class="text-danger">{{ $errors->first('g_gender') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="g_rel">Relationship with Guarantor</label>
                <input class="form-control {{ $errors->has('g_rel') ? 'is-invalid' : '' }}" type="text" name="g_rel" id="g_rel" value="{{ old('g_rel', '') }}" required>
                @if($errors->has('g_rel'))
                    <span class="text-danger">{{ $errors->first('g_rel') }}</span>
                @endif
            </div> 
            <div class="form-group col-md-6 col-xs-12">
                <label for="g_phone">{{ trans('cruds.loan.fields.g_phone') }}</label>
                <input class="form-control {{ $errors->has('g_phone') ? 'is-invalid' : '' }}" type="text" name="g_phone" id="g_phone" value="{{ old('g_phone', '') }}" required>
                @if($errors->has('g_phone'))
                    <span class="text-danger">{{ $errors->first('g_phone') }}</span>
                @endif
            </div>
            <div class="form-group col-md-6 col-xs-12">
                <label for="g_address">{{ trans('cruds.loan.fields.g_address') }}</label>
                <input class="form-control {{ $errors->has('g_address') ? 'is-invalid' : '' }}" type="text" name="g_address" id="g_address" value="{{ old('g_address', '') }}" required>
                @if($errors->has('g_address'))
                    <span class="text-danger">{{ $errors->first('g_address') }}</span>
                @endif
            </div>
            
                <div class="form-group col-md-6 col-xs-12">
                    <label  for="image2">Upload Guarantor's Valid ID Card</label>
                    <div class="col-md-12">
                        <input id="image2" name="image2" type="file"  class="form-control" multiple>
                    </div>
                </div>
          
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection