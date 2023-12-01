<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mentor</title>
    <script src="https://cdn.tailwindcss.com"></script> 
</head>
<body class="font-sans">

<!-- Modal -->

<div id="editModal" class="fixed inset-0 bg-black bg-opacity-75 overflow-y-auto">
    <div class="flex mt-14 mb-14 items-center justify-center min-h-screen">
        <div class="bg-white w-1/2 p-6 rounded shadow-lg">
            <!-- Edit form goes here -->
            <h2 class="text-2xl font-bold mb-4">Edit Mentor</h2>
            <?php foreach ($data['mentor'] as $mentor): ?>
                <form action="?controller=Admin&method=update" method="POST">
            
                <input type="hidden" name="id_mentor" value="<?php echo $mentor['id_mentor']; ?>">
                <label for="nama_mentor" class="block text-sm font-semibold mb-1">Nama Mentor:</label>
                <input type="text" name="nama_mentor" value="<?php echo $mentor['nama_mentor']; ?>" class="w-full border px-3 py-2 mb-3">
            
                <label for="hasil_penelitian" class="block text-sm font-semibold mb-1">Hasil Penelitian:</label>
                <input type="text" name="hasil_penelitian" value="<?php echo $mentor['hasil_penelitian']; ?>" class="w-full border px-3 py-2 mb-3">

                <label for="minat_penelitian" class="block text-sm font-semibold mb-1">Minat Penelitian:</label>
                <input type="text" name="minat_penelitian" value="<?php echo $mentor['minat_penelitian']; ?>" class="w-full border px-3 py-2 mb-3"> 

                <label for="fee" class="block text-sm font-semibold mb-1">Fee:</label>
                <input type="text" name="fee" value="<?php echo $mentor['fee']; ?>" class="w-full border px-3 py-2 mb-3"> 

                <label for="jadwal" class="block text-sm font-semibold mb-1">Jadwal:</label>
                <input type="text" name="jadwal" value="<?php echo $mentor['jadwal']; ?>" class="w-full border px-3 py-2 mb-3"> 

                <label for="minat_penelitian" class="block text-sm font-semibold mb-1">Minat Penelitian:</label>
                <input type="text" name="minat_penelitian" value="<?php echo $mentor['minat_penelitian']; ?>" class="w-full border px-3 py-2 mb-3"> 

                <label for="pendidikan" class="block text-sm font-semibold mb-1">Pendidikan:</label>
                <input type="text" name="pendidikan" value="<?php echo $mentor['pendidikan']; ?>" class="w-full border px-3 py-2 mb-3">

                <label for="sertifikasi" class="block text-sm font-semibold mb-1">Sertifikasi:</label>
                <input type="text" name="sertifikasi" value="<?php echo $mentor['sertifikasi']; ?>" class="w-full border px-3 py-2 mb-3">

                <label for="deskripsi" class="block text-sm font-semibold mb-1">Deskripsi:</label>
                <input type="text" name="deskripsi" value="<?php echo $mentor['deskripsi']; ?>" class="w-full border px-3 py-2 mb-3">

                <label for="tempat" class="block text-sm font-semibold mb-1">Tempat:</label>
                <input type="text" name="tempat" value="<?php echo $mentor['tempat']; ?>" class="w-full border px-3 py-2 mb-3">

                <label for="spesialisasi" class="block text-sm font-semibold mb-1">Spesialisasi:</label>
                <input type="text" name="spesialisasi" value="<?php echo $mentor['spesialisasi']; ?>" class="w-full border px-3 py-2 mb-3">

                <label for="judul" class="block text-sm font-semibold mb-1">Judul:</label>
                <input type="text" name="judul" value="<?php echo $mentor['judul']; ?>" class="w-full border px-3 py-2 mb-3">
                
                <div class="flex justify-end">
                    <button type='submit' onClick="" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Save Changes</button>
                    <button type="button" onclick="cancelEdit()" class="ml-2 bg-gray-400 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded">Cancel</button>
                </div>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>



<script>
    // JavaScript to handle closing of the modal
    function cancelEdit() {
        document.getElementById('editModal').classList.add('hidden');
        window.location.href = '? controller=Admin';
    }

    // Show the modal
    document.addEventListener('DOMContentLoaded', function () {
        document.getElementById('editModal').classList.remove('hidden');
    });
</script>

</body>
</html>
