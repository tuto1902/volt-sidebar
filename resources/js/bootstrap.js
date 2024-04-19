import { collapse } from '@alpinejs/collapse';
import { Alpine, Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';

Livewire.start();

Alpine.plugin(collapse);

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
