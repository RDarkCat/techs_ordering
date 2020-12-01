import store from '../store';
import promos from "./modules/promos";
import axios from 'axios';

    store.subscribe((mutation) => {
        switch (mutation.type) {
            case 'auth/SET_TOKEN':
                if (mutation.payload) {
                    axios.defaults.headers.common['Authorization'] = `Bearer ${mutation.payload}`;
                    localStorage.setItem('token', mutation.payload);
                } else {
                    axios.defaults.headers.common['Authorization'] = null;
                    localStorage.removeItem('token');
                }

                break

            // case 'promos/SET_FILER_PROPS':
            //     // this.promos.actions.responsePromos;
            //     //this.promos.responsePromos();
            //     break;
        }
    })

    // store.subscribeAction((action, state) => {
    //     console.log(action.type);
    //     console.log(action.payload);
    //
    //     if (action.type === 'promos/setFilterPromos') {
    //         // do what you want there
    //     }
    // });
