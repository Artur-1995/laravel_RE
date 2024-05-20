
export default {
    data() {
        return {
            name: '',
            error: ''
        };
    },
    methods: {
        createUser() {
            if (/^\d{1, 12}$/.test(this.name) || /^[a-zA-Z]+$/.test(this.name)) {
                // Логика создания пользователя
                console.log('User created:', this.name);
                this.error = '';
            } else {
                this.error = 'Invalid name. Enter only digits (up to 12 characters) or letters in both cases.';
            }
        }
    }
};