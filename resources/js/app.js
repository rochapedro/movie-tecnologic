//import './core/bootstrap.bundle.min';
import './core/bootstrap.min';
import './core/popper.min';

//import './plugins/Chart.extension';
import './plugins/bootstrap-notify';
//import './plugins/chartjs.min';
import './plugins/perfect-scrollbar.min';
import './plugins/smooth-scrollbar.min';

import './soft-ui-dashboard.min';

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
