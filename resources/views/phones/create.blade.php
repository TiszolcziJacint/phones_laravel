<x-layout>
    <h1>Create a new phone</h1>

    <form method="POST" action="{{ route('phones.store') }}">
        @csrf
        <div class="mb-3">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control @error('brand') is-invalid @enderror" id="brand" name="brand"
                value="{{ old('brand') }}">
            @error('brand')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control @error('model') is-invalid @enderror" id="model"
                name="model" value="{{ old('model') }}">
            @error('model')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="storage" class="form-label">Storage</label>
            <input type="text" class="form-control @error('storage') is-invalid @enderror" id="storage"
                name="storage" value="{{ old('storage') }}">
            @error('storage')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
           <label for="ram" class="form-label">RAM</label>
           <input type="text" class="form-control @error('ram') is-invalid @enderror" id="ram"
               name="ram" value="{{ old('ram') }}">
            @error('ram')
               <div class="invalid-feedback">{{ $message }}
               </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                name="price" value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">{{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>