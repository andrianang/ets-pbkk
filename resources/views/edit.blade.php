<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        Edit a Product
    </div>
    <form method="post" action="{{ route('post-edit',  ['product' => $post->id]) }}" enctype="multipart/form-data">   
    @csrf
    @method('patch')
    <input type="hidden" name="id" value="{{ $post->id }}">
    <div>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" value="{{$post->nama}}">
    </div>
    <div class="flex">
        <label for="kategori_id">kategori</label>
        <select id="kategori_id" name="kategori_id">
            @foreach($kategoris as $test)
            <option value="{{ $test->id }}"><h1 class="text-1xl font-bold">{{ $test->nama }}</h1></option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="kondisi_id">kondisi</label>
        <select id="kondisi_id" name="kondisi_id">
            @foreach($kondisis as $test)
            <option value="{{ $test->id }}"><h1 class="text-1xl font-bold">{{ $test->nama }}</h1></option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi">{{$post->deskripsi}}</textarea>
    </div>
    <div>
        <label for="kecacatan">Kecacatan</label>
        <textarea name="kecacatan" id="kecacatan">{{$post->kecacatan}}</textarea>
    </div>
    <div>
        <label for="jumlah">Jumlah</label>
        <input type="text" name="jumlah" id="jumlah" value="{{ $post->jumlah }}">
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