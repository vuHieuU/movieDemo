    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                        <span class="mr-1"><script>document.write(new Date().getFullYear())</script>©</span> <a href="#" class="">POS Dash</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
 <!-- Backend Bundle JavaScript -->
 <script src="/template/assets/js/backend-bundle.min.js"></script>
    
 <!-- Table Treeview JavaScript -->
 <script src="/template/assets/js/table-treeview.js"></script>
 
 <!-- Chart Custom JavaScript -->
 <script src="/template/assets/js/customizer.js"></script>
 
 <!-- Chart Custom JavaScript -->
 <script async src="/template/assets/js/chart-custom.js"></script>
 
 <!-- app JavaScript -->
 <script src="/template/assets/js/app.js"></script>

 <script>
    // Lấy tất cả các ô checkbox có lớp "checkbox"
    const checkboxes = document.querySelectorAll('.checkbox');

    // Lấy ô checkbox master
    const masterCheckbox = document.querySelector('[data-master-checkbox]');

    // Thêm sự kiện click cho ô checkbox master
    masterCheckbox.addEventListener('click', function() {
        const isChecked = this.checked;

        // Đặt trạng thái checked cho tất cả các ô checkbox khác
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = isChecked;
        });
    });
</script>