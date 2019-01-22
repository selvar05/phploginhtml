1. Dont know how to call cdn link directly. So i downloaded jquery.knob.min.js and pasted inside 'themes\boodadmin\js' folder (js file attached)
2. Called that jquery.knob.min.js from  assets/BootAdminAsset.php (refer attached file)
3. in views/site/index.php, one <div> tag not closed. thats why some alignment issue is there (refer index.php file)
4. attached views/layout/main.php also for your reference.
5. moved required scripts for home page (initializing knob.js & bootsrap popover) to bootadmin.min.js (file attached)
please do not call any css/js cdn links from template which i shared to you. all files are already available and called in existing project.
please apply those changes and let me know if you need further clarifications