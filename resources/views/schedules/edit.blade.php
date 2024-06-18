@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">スケジュール編集</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('schedules.update', $schedule) }}">
                            @csrf
                            @method('PUT')

                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">タイトル</label>

                                <div class="col-md-6">
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title"
                                        value="{{ old('title', $schedule->title) }}" required autocomplete="off">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">概要</label>

                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror"
                                        name="description">{{ old('description', $schedule->description) }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="start_date" class="col-md-4 col-form-label text-md-end">開始日</label>

                                <div class="col-md-6">
                                    <input id="start_date" type="date"
                                        class="form-control @error('start_date') is-invalid @enderror" name="start_date"
                                        value="{{ old('start_date', $schedule->start_date) }}" required autocomplete="off">

                                    @error('start_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="end_date" class="col-md-4 col-form-label text-md-end">終了日</label>

                                <div class="col-md-6">
                                    <input id="end_date" type="date"
                                        class="form-control @error('end_date') is-invalid @enderror" name="end_date"
                                        value="{{ old('end_date', $schedule->end_date) }}" required autocomplete="off">

                                    @error('end_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        更新
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
