import getData from './services.js';
import renderCard from './show.js';

const usersBtn = document.querySelector('#users');
usersBtn.addEventListener('click', () => {
  menu();
});

const menu = async () => {
  getData('query_users.php').then((data) => {
    console.log('data    ', data);
    renderCard(data.records);
  });
};
