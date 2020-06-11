document.querySelectorAll('.dropdown__remove').forEach((item) => { item.addEventListener('click', ajaxCartRemove) });

function ajaxCartRemove() {
    let productid = this.dataset.productid;
    let nonce = this.dataset.nonce;
    jQuery.ajax({
        type: 'post',
        url: '/wp-admin/admin-ajax.php',
        data: {
            action: 'item_remove',
            productid: productid,
        },
        success: function(result) {
            document.location.reload();
            //document.location.href="/";
        }
    })
}