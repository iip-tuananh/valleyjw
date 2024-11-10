<script>
    class CategorySpecial extends BaseClass {
        no_set = [];

        before(form) {
        }

        after(form) {

        }

        get end_date() {
            return this._end_date ? moment(this._end_date).format('DD/MM/YYYY') : '';
        }

        set end_date(value) {
            this._end_date = value ? moment(value).format('YYYY-MM-DD') : '';
        }


        get submit_data() {
            let data = {
                name: this.name,
                code: this.code,
                type: this.type,
                order_number: this.order_number,
                show_home_page: this.show_home_page,
                end_date: this._end_date,
            }
            data = jsonToFormData(data);

            return data;
        }
    }
</script>
