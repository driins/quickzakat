<?php
include('koneksi.php');
$fakir = mysqli_query($koneksi, "SELECT COUNT(*) as banyak_fakir FROM mustahik_warga WHERE kategori = 'Fakir'");
$fakir = mysqli_fetch_assoc($fakir);
$mampu = mysqli_query($koneksi, "SELECT COUNT(*) as banyak_mampu FROM mustahik_warga WHERE kategori = 'Mampu'");
$mampu = mysqli_fetch_assoc($mampu);
$miskin = mysqli_query($koneksi, "SELECT COUNT(*) as banyak_miskin FROM mustahik_warga WHERE kategori = 'Miskin'");
$miskin = mysqli_fetch_assoc($miskin);
$mualaf = mysqli_query($koneksi, "SELECT COUNT(*) as banyak_mualaf FROM mustahik_lainnya WHERE kategori = 'Mualaf'");
$mualaf = mysqli_fetch_assoc($mualaf);
$fisabilillah = mysqli_query($koneksi, "SELECT COUNT(*) as banyak_fisabilillah FROM mustahik_lainnya WHERE kategori = 'Fisabilillah'");
$fisabilillah = mysqli_fetch_assoc($fisabilillah);
$ibnusabil = mysqli_query($koneksi, "SELECT COUNT(*) as banyak_ibnusabil FROM mustahik_lainnya WHERE kategori = 'Ibnu Sabil'");
$ibnusabil = mysqli_fetch_assoc($ibnusabil);
$amilin = mysqli_query($koneksi, "SELECT COUNT(*) as banyak_amilin FROM mustahik_lainnya WHERE kategori = 'Amilin'");
$amilin = mysqli_fetch_assoc($amilin);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Laporan Distribusi - QuickZakat</title>
    <!-- plugins:css -->
  </head>
        <!-- Table with stripped rows -->
        <p style="text-align: center; font-weight:bold; font-size: 24px;">Laporan Distribusi Zakat</p>
        <table width="100%" border = "1">
            <thead>
                <tr>
                  <th scope="col">Kategori Mustahik</th>
                  <th scope="col">Hak Beras</th>
                  <th scope="col">Jumlah KK</th>
                  <th scope="col">Total Beras</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <td>Fakir</td>
                  <td>7kg</td>
                  <td><?php echo $fakir['banyak_fakir']; ?></td>
                  <td><?php echo $fakir['banyak_fakir'] * 7; ?>kg</td>
                </tr>
                <tr>
                  <td>Miskin</td>
                  <td>5kg</td>
                  <td><?php echo $miskin['banyak_miskin']; ?></td>
                  <td><?php echo $miskin['banyak_miskin'] * 5; ?>kg</td>
                </tr>
                <tr>
                  <td>Mampu</td>
                  <td>3kg</td>
                  <td><?php echo $mampu['banyak_mampu']; ?></td>
                  <td><?php echo $mampu['banyak_mampu'] * 3; ?>kg</td>
                </tr>
                <tr>
                  <td>Mualaf</td>
                  <td>2kg</td>
                  <td><?php echo $mualaf['banyak_mualaf']; ?></td>
                  <td><?php echo $mualaf['banyak_mualaf'] * 2; ?>kg</td>
                </tr>
                <tr>
                  <td>Fisabilillah</td>
                  <td>2kg</td>
                  <td><?php echo $fisabilillah['banyak_fisabilillah']; ?></td>
                  <td><?php echo $fisabilillah['banyak_fisabilillah'] * 2; ?>kg</td>
                </tr>
                <tr>
                  <td>Ibnu Sabil</td>
                  <td>2kg</td>
                  <td><?php echo $ibnusabil['banyak_ibnusabil']; ?></td>
                  <td><?php echo $ibnusabil['banyak_ibnusabil'] * 2; ?>kg</td>
                </tr>
                <tr>
                  <td>Amilin</td>
                  <td>2kg</td>
                  <td><?php echo $amilin['banyak_amilin']; ?></td>
                  <td><?php echo $amilin['banyak_amilin'] * 2; ?>kg</td>
                </tr>
            </tbody>
            </table>
            <br>
            <h3>Total: <?php echo $fakir['banyak_fakir'] * 7 + $miskin['banyak_miskin'] * 5 + $mampu['banyak_mampu'] * 3 + $mualaf['banyak_mualaf'] * 2 + $fisabilillah['banyak_fisabilillah'] * 2 + $amilin['banyak_amilin'] * 2 + $ibnusabil['banyak_ibnusabil'] * 2; ?>kg</h3>
            
            <!-- End Table with stripped rows -->
