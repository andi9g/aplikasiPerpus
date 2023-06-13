<div class="form-group">
    <label for="exampleInputFile">Ubah Logo Perpustakaan</label>
    <form action="{{ url('/pengaturanLogo', []) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="input-group mb-3">
            <input type="file" class="form-control" placeholder="Pilih logo" aria-label="Recipient's username" name="logo" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-success" type="submit" id="button-addon2">Upload</button>
            </div>
          </div>
    {{-- <div class="input-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="exampleInputFile" name="logo">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
      </div>
      <div class="input-group-append">
        <button type="submit" class="input-group-text bg-primary" id="">Upload</button>
      </div>
    </div> --}}
    </form>
</div>
