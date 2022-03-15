<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
        value="{{ old('nama', $satuan->nama) }}">
    @error('nama')
    <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <select class="form-control" name="category_id" id="category">
        <option hidden>Choose Category</option>
        @foreach($categories as $item)
        <option value="{{ $item->id }}" {{ old('category_id', $satuan->category_id) == $item->id ? 'selected' : ''
            }}>{{ $item->nama }}</option>
        @endforeach
    </select>
</div>
<div class="mb-3">
    <label class="form-label">Course</label>
    <select class="form-control" name="course_id" id="course">
        @foreach($courses as $item)
            @if (old('course_id', $satuan->course_id) == $item->id ? 'selected' : '')
            <option value="{{ $item->id }}">{{
                $item->nama }}</option>
            @endif
        @endforeach
    </select>
</div>
<div class="mb-3">
    <labelclass="form-label">Jumlah</labelclass=>
        <input type="text" class="form-control" name="jumlah" value="{{ old('jumlah', $satuan->jumlah) }}">
</div>
<button type="submit" class="btn btn-primary">{{ $submit }}</button>
@pushOnce('footer')
<script src="{{ asset('assets/js/dependent.js') }}"></script>
@endPushOnce