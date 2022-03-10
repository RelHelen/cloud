import start from './moduls/start.js';

const init = (selector, title) => {
  console.log('selector=', selector);
  const app = document.querySelector(selector);
  //const { mainHeader } = start(app, title);
  start(app, title);
};
init('.main', 'Ваши данные');
