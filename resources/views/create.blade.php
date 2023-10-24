<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        Create a Product
    </div>
    <form method="POST" action="{{ route('post-store') }}" enctype="multipart/form-data">    @csrf
    @method('POST')
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
    </div>
    <div class="flex">
        <label for="kategori_id">kategori</label>
        <select id="kategori_id" name="kategori_id">
            @foreach($kategoris as $post)
            <option value="{{ $post->id }}"><h1 class="text-1xl font-bold">{{ $post->nama }}</h1></option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="kondisi_id">kondisi</label>
        <select id="kondisi_id" name="kondisi_id">
            @foreach($kondisis as $post)
            <option value="{{ $post->id }}"><h1 class="text-1xl font-bold">{{ $post->nama }}</h1></option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi"></textarea>
    </div>
    <div>
        <label for="kecacatan">Kecacatan</label>
        <textarea name="kecacatan" id="kecacatan"></textarea>
    </div>
    <div>
        <label for="jumlah">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah">
    </div>
     <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
            @error('images')
            <span class="text-danger">{{ $message }}</span>
            @enderror
    </div>
    <button type="submit">Submit</button>
</form>

</body>
</html>