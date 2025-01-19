
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    .custom-popup {
      text-align: left;
      font-family: Arial, sans-serif;
    }
    .custom-popup .ticket-info {
      display: flex;
      gap: 1rem;
      margin-bottom: 1rem;
    }
    .custom-popup .ticket-info img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      border-radius: 8px;
    }
    .custom-popup .ticket-info div {
      flex: 1;
    }
    .custom-popup textarea {
      width: 100%;
      height: 80px;
      padding: 0.5rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    .custom-popup .upload-btn {
      display: inline-block;
      background-color: #f2f2f2;
      padding: 0.5rem 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>

  <!-- Tombol Awal -->
  <button id="show-popup" style="padding: 10px 20px; font-size: 16px; cursor: pointer;">Buka Pop-Up</button>

  <script>
    // Event Listener untuk Tombol Awal
    document.getElementById('show-popup').addEventListener('click', () => {
      Swal.fire({
        title: 'Review',
        html: `
          <div class="custom-popup">
            <div class="ticket-info">
              <img src="https://unsplash.it/100/100" alt="Tiket">
              <div>
                <h3 style="margin: 0;">Tiket Konser Sedjiwa</h3>
                <p style="margin: 0;">Category: VIP</p>
                <p style="margin: 0;">Jumlah: 1 Tiket</p>
              </div>
            </div>
            <div>
              <label for="comment" style="display: block; margin-bottom: 0.5rem;">Komentar</label>
              <textarea id="comment" placeholder="Tambahkan komentar Anda..."></textarea>
            </div>
            <div style="margin-top: 1rem;">
              <label for="file-upload" class="upload-btn">Tambah Foto</label>
              <input type="file" id="file-upload" style="display: none;">
            </div>
          </div>
        `,
        width: 600,
        showCancelButton: true,
        cancelButtonText: 'Nanti Saja',
        confirmButtonText: 'Review',
        confirmButtonColor: '#4A90E2',
        preConfirm: () => {
          const comment = document.getElementById('comment').value;
          if (!comment) {
            Swal.showValidationMessage('Komentar tidak boleh kosong!');
            return false;
          }
          return { comment };
        },
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: 'Terima Kasih!',
            text: 'Review Anda telah dikirim.',
            icon: 'success',
          });
        }
      });
    });
  </script>

