<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin - Tambah Game</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 2rem;
      background-color: #f9f9f9;
    }
    h2 {
      margin-bottom: 1rem;
    }
    form {
      max-width: 500px;
      background: white;
      padding: 1.5rem;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    label {
      display: block;
      margin-top: 1rem;
      font-weight: bold;
    }
    input, textarea, button {
      width: 100%;
      padding: 0.6rem;
      margin-top: 0.3rem;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    button {
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
      margin-top: 1.5rem;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <h2>Tambah Game Baru</h2>

  <form action="../service/tambah_game.php" method="POST" enctype="multipart/form-data">
    <label for="title">Judul Game</label>
    <input type="text" id="title" name="title" placeholder="Contoh: Cyberpunk 2077" required>

    <label for="genre">Genre</label>
    <input type="text" id="genre" name="genre" placeholder="Contoh: Action" required>

    <label for="rating">Rating (0.0 - 10.0)</label>
    <input type="number" id="rating" name="rating" step="0.1" min="0" max="10" placeholder="Contoh: 9.1">

    <label for="release_date">Tanggal Rilis</label>
    <input type="date" id="release_date" name="release_date">

    <label for="image">Upload Gambar</label>
    <input type="file" id="image" name="image" accept="image/*">

    <label for="description">Deskripsi</label>
    <textarea id="description" name="description" rows="4" placeholder="Deskripsi singkat tentang game..."></textarea>

    <!-- Tambahan Fitur -->
    <label for="features">Fitur Game</label>
    <input type="text" id="features" name="features" placeholder="Contoh: Multiplayer, Sci-fi, Sandbox">

    <!-- Tambahan Platform -->
    <label for="platform">Platform</label>
    <input type="text" id="platform" name="platform" placeholder="Contoh: PlayStation 4, Xbox One, iOS">

    <button type="submit">Tambah Game</button>
  </form>

</body>
</html>
