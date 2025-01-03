@extends('layout.contact')

@section('title', 'contact')

@section('content')

<h2>Contact List</h2>
    <ul id="contactList"></ul>

    <script>
        // Simpan data ke localStorage ketika tombol submit ditekan 
        document
            .getElementById("contactForm")
            .addEventListener("submit", function (e) {
                e.preventDefault(); // Mencegah form dari reload halaman setelah submit

                // Ambil nilai dari input
                const name = document.getElementById("nama").value;
                const email = document.getElementById("email").value;
                const subject = document.getElementById("subject").value;
                const message = document.getElementById("message").value;

                // Ambil daftar kontak lama dari localStorage, jika tidak ada data gunakan array kosong
                let contacts = JSON.parse(localStorage.getItem("contacts")) || [];

                // Tambahkan kontak baru ke daftar
                contacts.push({ name, email, subject, message });
                
                // Simpan kembali daftar kontak ke localStorage
                localStorage.setItem("contacts", JSON.stringify(contacts));

                // Kosongkan form setelah submit
                document.getElementById("contactForm").reset();

                // Tampilkan daftar kontak yang sudah di-update
                displayContacts();
            });

        // Fungsi untuk menampilkan data dari localStorage
        function displayContacts() {
            const contactList = document.getElementById("contactList");
            contactList.innerHTML = ""; // Kosongkan list sebelumnya

            // Ambil data kontak dari localStorage
            const contacts = JSON.parse(localStorage.getItem("contacts")) || [];

            // Loop untuk menampilkan setiap kontak
            contacts.forEach((contact) => {
                contactList.innerHTML += `<li>Nama: ${contact.name}, Email: ${contact.email}, Subject: ${contact.subject}, Message: ${contact.message}</li>`;
            });
        }

        // Panggil fungsi untuk menampilkan kontak saat halaman pertama kali dimuat
        window.onload = displayContacts;
    </script>

@endsection