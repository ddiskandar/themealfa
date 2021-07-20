</main>

<?php do_action('themealfa_content_end'); ?>

</div>

<?php do_action('themealfa_content_after'); ?>

<div class="bg-gray-100">
	<section class="container flex flex-col items-center justify-between px-4 pt-8 mx-auto mb-8 space-y-6 md:px-0 md:space-x-6 md:space-y-0 md:flex-row">
		<a href="https://www.youtube.com/channel/UCqejvL7CLchNRzUIrBhZCng" class="flex flex-col items-center w-full p-8 transition duration-500 ease-in-out transform bg-white border-2 border-transparent shadow-lg cursor-pointer hover:border-red-600 auto lg:flex-row md:w-1/3" id="sosmed-youtube">
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/icons/alfatv.svg" class="w-12 lg:mr-6" alt="">
			<div class="mt-2 text-center lg:mt-0 lg:text-left">
				<h3 class="text-xl font-bold">Al-Farhan TV</h3>
				<div class="text-sm">Channel Youtube Official</div>
			</div>
		</a>
		<a href="https://web.facebook.com/SMKPlusAlFarhan/" class="flex flex-col items-center w-full p-8 transition duration-500 ease-in-out transform bg-white border-2 border-transparent shadow-lg cursor-pointer auto lg:flex-row md:w-1/3 hover:border-blue-600" id="sosmed-youtube">
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/icons/fanspage.svg" class="w-12 lg:mr-6" alt="">
			<div class="mt-2 text-center lg:mt-0 lg:text-left">
				<h3 class="text-xl font-bold">@SMKPlusAlfarhan</h3>
				<div class="text-sm">Halaman Resmi facebook</div>
			</div>
		</a>
		<a href="https://www.instagram.com/smkplusalfarhan/" class="flex flex-col items-center w-full p-8 transition duration-500 ease-in-out transform bg-white border-2 border-transparent shadow-lg cursor-pointer auto lg:flex-row md:w-1/3 hover:border-purple-600" id="sosmed-youtube">
			<img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/icons/instagram.svg" class="w-12 lg:mr-6" alt="">
			<div class="mt-2 text-center lg:mt-0 lg:text-left">
				<h3 class="text-xl font-bold">/smkplusalfarhan</h3>
				<div class="text-sm">Halaman Instagram</div>
			</div>
		</a>
	</section>

	<footer class="">
		<section class="container relative px-4 pb-8 mx-auto md:px-0 md:pb-0">
			<hr class="mt-12 mb-8 bg-gray-300" style="height: 1px;">
			<div class="flex flex-col md:flex-row">
				<div class="md:w-3/12">
					<h3 class="font-bold">SMK PLUS AL-FARHAN</h3>
					<ul>
						<li>Profil</li>
						<li>Kepala Sekolah</li>
						<li>Guru dan Staff</li>
						<li>Prestasi</li>
						<li>Ekstrakurikuler</li>
						<li>Fasilitas</li>
						<li>Gallery</li>
					</ul>
				</div>
				<div class="md:w-4/12">
					<h3 class="mt-8 font-bold md:mt-0">PROGRAM KEAHLIAN</h3>
					<ul>
						<li>Multimedia</li>
						<li>Bisnis Daring dan Pemasaran</li>
						<li>Agribisnis Pengolahan Hasil Pertanian</li>
					</ul>
					<h3 class="mt-8 font-bold">UNIT</h3>
					<ul>
						<li>Business Center</li>
						<li>Unit Produksi</li>
						<li>Alfarhan TV</li>
					</ul>
				</div>
				<div class="md:w-5/12">
					<h3 class="mt-8 font-bold md:mt-0">ALAMAT</h3>
					<p>Jalan Cisarua Km. 03 Cimahigirang Ds. Citamiang
						Kec. Kadudampit Kab. Sukabumi 43153</p>
					<h3 class="mt-8 font-bold">APLIKASI</h3>
					<ul>
						<li>E-Learning</li>
						<li>E-Mail</li>
						<li>E-Poin</li>
						<li>eRaporSMK</li>
						<li>Dapodik</li>
					</ul>
				</div>
			</div>
		</section>
		<img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/icons/bg-footer.svg" class="hidden w-full sm:block" alt="">
		<section class="px-4 pb-8 -mt-1 text-white md:px-0 md:pb-20 bg-primary">
			<div class="container relative flex flex-col mx-auto mb-16 sm:items-center sm:flex-row">
				<img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/icons/smkbisa.svg" class="w-20 pt-4 ml-0 sm:order-2 lg:pt-0 lg:w-40 sm:mr-20 lg:ml-6" alt="">
				<div class="order-1 pt-8 text-sm text-center sm:order-3 md:pt-0 md:text-base">Copyright 2020 SMK Plus Al-Farhan. <span class="hidden sm:inline-block">Made with love by me.</span></div>
				<img src="<?php echo esc_url(get_template_directory_uri()) ?>/images/icons/logo-smk.svg" class="absolute top-0 right-0 w-32 -mt-12 lg:-mt-40 lg:w-64" alt="logo SMK">
			</div>
		</section>
	</footer>
</div>

</div>

<?php wp_footer(); ?>

</body>

</html>