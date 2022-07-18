import {faHome} from '@fortawesome/free-solid-svg-icons';
import {reactive} from 'vue';

export const right_bar = reactive({
    active : -1,
    dropped : -1,
    list : [
        {
            icon : faHome,
            title : 'خانه',
            list : [
                {
                    route : 'dashboard',
                    name : 'داشبورد'
                },
                {
                    route : 'login',
                    name : 'ورود'
                },
            ]
        }
    ]
});
