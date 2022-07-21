import {faHome, faUsers} from '@fortawesome/free-solid-svg-icons';
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
        },
        {
            icon: faUsers,
            title : 'تیم',
            list:[
                {
                    route : 'dashboard.team.index',
                    name : 'لیست تیم‌ها'
                },
                {
                    route : 'dashboard.team.create',
                    name : 'ساخت تیم‌ جدید'
                }
            ]
        }
    ]
});
