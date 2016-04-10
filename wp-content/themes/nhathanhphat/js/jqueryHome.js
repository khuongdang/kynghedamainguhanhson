$(document).ready(function () {
    $("#doSendFeedback").click(function () {
        var data = { txtfullname: $("#txtFfullname").val(), txtaddress: $("#txtFaddress").val(), txtphone: $("#txtFphone").val(),
            txtemail: $("#txtFemail").val(), txtcontent: $("#txtFcontent").val()
        };
        $.post(UrlPathHome + "HomeContact/SendFeedback", data,
 function (data) {
     if (data.errorcode > 0 && data.errorcode != 1001) {
         $("#txtFfullname").val("");
         $("#txtFaddress").val("");
         $("#txtFphone").val("");
         $("#txtFemail").val("");
         $("#txtFcontent").val("");
         $("#error-message").text("");
         $("span#error-message").text("");
         alert(data.errormessage);
         window.location.href = UrlPathHome + "home";
     }
     else {
         $("span#error-message").text(data.errormessage).fadeIn(400);
     }
 }, "json");
    });

    $("input#sendmail").click(function () {
        $.post(UrlPathHome + "Letter/SendMail", { address_email: $("#txtmail").val() },
 function (data) {
     //if (data.errorcode > 0 && data.errorcode != 100) {
     $("#txtmail").val("");
     //}
     alert(data);
 }, "html");
    });

    //$("img#prevNav").click(function () {
    //    $('a.nivo-prevNav').trigger('click');
    //});
    //$("img#nextNav").click(function () {
    //    $('a.nivo-nextNav').trigger('click');
    //});

    $("#ddlWebLink").change(function () {
        var v = $(this).val();
        if (v != '')
            window.open(v, '_blank');
    });

    $("#ddlSelectMember").change(function () {
        var v = $(this).val();
        window.location.href = UrlPathHome + v;
    });


    bannermargin(".slider");
    //bannermargin(".Banner-Sub .htmltext");
    $(window).resize(function () {
        bannermargin(".slider");
        //bannermargin(".Banner-Sub .htmltext");
    });


    //FixHeightModuleLeftRight();
});
function FixHeightModuleLeftRight() {
    var moduleLeft = $("div.content-box-left").height();
    var moduleRight = $("div.content-box-right").height();
    if (moduleLeft != "null" && moduleRight != "null") {
        if (moduleLeft < moduleRight) {
            $(".container div.content-box-left").height(moduleRight-24);
        }
        else {
            //$(".container div.content-box-right").height(moduleLeft);
        }
    }
}

function bannermargin(id) {
    var _Banner = $(id).find('img');
    if (_Banner.length > 0) {
        var _width = 1348; /*_Banner.width();*/
        var _document = $(document).width();
        var margin = (_document - _width) / 2;
        $(id).css('margin', '0 ' + margin + 'px');
    }
}

function menu_left_select(key) {
    $("a#mleft_" + key).parents("li.m_parent").addClass("active").addClass("select"); //.children("a.menulink").addClass("m-select");

    $("li.m_parent.active a").eq(0).addClass("cwhile");
}
//----------------------------------------------------------
function frm_search(f) {
    var key = $("input[name=key]").val();
    if (key == '' || key == 'keywords here ...') {
        alert("Vui lòng nhập từ khóa.");
        return false;
    }
    f.submit();
    return false;
}

function valid_frm_orders() {
    $("#frm_orders").validate({
        rules: {
            txtName: { required: true },
            txtEmail: { required: true, email: true }
        },
        messages: {
            txtName: { required: "*" },
            txtEmail: { required: "*", email: "*" }
        }
    });
}
