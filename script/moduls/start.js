import createMyElement from './creatElement.js';
import createTitle from './creatTitle.js';
import createPanel from './creatPanel.js';

//start  выводит элемент
const start = (app, title) => {
  const mainHeader = createTitle(title);
  const mainPanel = createPanel();
  console.log('mainPanel: ', mainPanel);
  console.log('mainHeader: ', mainHeader);
  // const main = createMain();
  //const firstForm = creatFirstForm(data);

  app.append(mainHeader, mainPanel);

  return { mainHeader };
};
//передача start
export default start;
