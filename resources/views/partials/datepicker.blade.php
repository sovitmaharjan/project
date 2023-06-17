<script>
    const {
        log: myLog
    } = console;

    // function nepaliPicker(nepali_class) {
    //     var main_input = document.getElementsByClassName(nepali_class);
    //     main_input.nepaliDatePicker({
    //         language: "english",
    //         ndpYear: true,
    //         ndpMonth: true,
    //         ndpYearCount: 200
    //     });
    // }

    // function neptoeng(nepali_class, id_name) {
    //     var mainInput = document.getElementsByClassName(nepali_class);
    //     mainInput.nepaliDatePicker({
    //         language: "english",
    //         onChange: function() {
    //             let nepalidate = $("." + nepali_class).val();
    //             let dateObj = NepaliFunctions.ParseDate(nepalidate);
    //             let engDate = NepaliFunctions.BS2AD(dateObj.parsedDate);
    //             let year = engDate.year;
    //             let month = NepaliFunctions.Get2DigitNo(engDate.month);
    //             let day = NepaliFunctions.Get2DigitNo(engDate.day);
    //             let engValue = year + '-' + month + '-' + day;
    //             $("#" + id_name).val(engValue);
    //         },
    //         ndpYear: true,
    //         ndpMonth: true,
    //         ndpYearCount: 200
    //     });
    // }

    // function getFormattedDate(dateStr) {
    //     var parts = dateStr.split('-');
    //     return new Date(parts[2], parts[1] - 1, parts[0]);
    // }

    // function reformatdate(datestr) {
    //     var parts = datestr.split('-');
    //     return parts[2] + '-' + parts[1] + '-' + parts[0];
    // }

    // function engtonep(this_date, idName) {
    //     let dateTime = $(this_date).val();
    //     if (dateTime) {
    //         let dateObj = new Date(dateTime);
    //         let year = dateObj.getUTCFullYear();
    //         let month = dateObj.getUTCMonth() + 1;
    //         let day = dateObj.getUTCDate(); // + 1 for 'dd-mm-yyyy'
    //         let nepaliDate = NepaliFunctions.AD2BS({
    //             year: year,
    //             month: month,
    //             day: day
    //         });
    //         let nepaliYear = nepaliDate.year;
    //         let nepaliMonth = ("0" + nepaliDate.month).slice(-2);
    //         let nepaliDay = ("0" + nepaliDate.day).slice(-2);
    //         let nepaliValue = nepaliYear + '-' + nepaliMonth + '-' + nepaliDay;
    //         $("#" + idName).val(nepaliValue);
    //     } else {
    //         $("#" + idName).val('');
    //     }
    // }

    function englishToNepaliDatePicker(english, nepali, customFn = null) {
        english.flatpickr({
            onChange: function() {
                nepali.val(NepaliFunctions.AD2BS(english.val()));
                customFn ? customFn() : '';
            }
        });
    }

    function nepaliToEnglishDatepicker(nepali, english, customFn = null) {
        nepali.nepaliDatePicker({
            ndpYear: true,
            ndpMonth: true,
            onChange: function() {
                english.val(NepaliFunctions.BS2AD(nepali.val()));
                customFn ? customFn() : '';
            }
        });
    }
</script>
