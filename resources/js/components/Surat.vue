<template>
    <table v-if="letters.length > 0" class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nomor Surat</th>
                <th>Pemohon</th>
                <th>Jenis Surat</th>
                <th>Waktu Pengajuan</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="(surat, index) in sortedLetters" :key="surat.id">
                <td>{{ ++index }}</td>
                <td>{{ surat.nomor_surat }}</td>
                <td>{{ surat.identitas }} - {{ surat.pemohon }}</td>
                <td>{{ surat.jenis_surat }}</td>
                <td>{{ surat.waktu_readable }}</td>
                <td>
                    <a id="cetak" :href="'/surat/'+surat.id+'/cetak'" class="btn btn-sm btn-primary" title="Cetak Surat"><em class="fas fa-print"></em></a>
                    <a id="sunting" :href="'/surat/'+surat.id+'/sunting'" class="btn btn-sm btn-primary" title="Sunting Surat"><em class="fas fa-edit"> </em></a>
                    <a id="hapus" @click="hapusSurat(surat.id, csrf_token)" class="btn btn-sm btn-danger" title="Hapus Surat"><em class="fas fa-trash"> </em></a>
                </td>
            </tr>
        </tbody>
    </table>
    <div v-else>
        <h6 class="text-center">Belum ada pengajuan surat kemahasiswaan.</h6>
    </div>
</template>

<script>
    export default {
        props: ['current', 'type'],
        data() {
            return {
                letters: [],
                csrf_token: document.head.querySelector('meta[name="csrf-token"]').content
            }
        },
        created() {
            this.fetchSuratMasuk();
            this.listenForChanges();
        },
        methods: {
            fetchSuratMasuk() {
                axios.get('/surat/'+this.type).then((response) => {
                    this.letters = response.data;
                })
            },
            listenForChanges() {
                Echo.channel('surat-baru').listen('SuratDiajukan', (e) => {
                    this.letters.push(e.surat)
                })
                Echo.channel('surat-baru').listen('SuratDiproses', (e) => {
                    var surat = this.letters.find((surat) => surat.id === e.surat.id);
                    if (surat) {
                        this.letters.pop(e.surat)
                    }
                })
                Echo.channel('surat-baru').listen('SuratDihapus', (e) => {
                    var surat = this.letters.find((surat) => surat.id === e.surat.id);
                    if (surat) {
                        this.letters.pop(e.surat)
                    }
                })
            },
            hapusSurat(id_surat, token) {
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: 'Surat yang telah dihapus tidak dapat dikembalikan kembali.',
                    type: 'warning',
                    showCancelButton: true,
                    showCloseButton: true,
                    confirmButtonText: 'Ya, hapus surat tersebut',
                    cancelButtonText: 'Urungkan',
                }).then((result) => {
                    if (result.value) {
                        var route = "/surat/" + id_surat;
                        $.ajax({
                            url: route,
                            type: 'POST',
                            data: {_method: 'delete', _token: token},
                            success: function () {
                                Swal.fire({
                                    title: 'Terhapus',
                                    text: 'Surat yang Anda pilih berhasil dihapus.',
                                    type: 'success'
                                })
                            }
                        })
                    } else {
                        
                    }
                })
            }
        },
        computed: {
            sortedLetters: function() {
                return this.letters.sort((a,b) => new Date(b.created_at) - new Date(a.created_at))
            }
        }
    }
</script>