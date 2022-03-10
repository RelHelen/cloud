import createMyElement from './creatElement.js';
const menu = [
  { id: 'contracts', textContent: 'Договора', href: 'contracts.php' },
  { id: 'devaces', textContent: 'Объекты', href: 'objects.php' },
  { id: 'operation', textContent: 'Операции по счету', href: 'contracts.php' },
  { id: 'personal', textContent: 'Личный кабинет', href: 'contracts.php' },
];

console.log('menu: ', menu);
//создаем панель section для главной страницы
const createPanel = () => {
  const sectionPanel = createMyElement('section', {
    className: 'panel panel_view p-tl',
  });

  const headerPanel = createMyElement('header', {
    className: 'panel-header',
  });

  const ulStatus = createMyElement('ul', {
    className: 'panel-status',
  });

  const liBal = createMyElement('li', {
    className: 'panel-status-item panel-balance panel-balance_limit',
  });
  const liDate = createMyElement('li', {
    className: 'panel-status-item panel-date panel-date_limit',
  });
  const spanBarBal = createMyElement('span', {
    className: 'par panel-par',
    textContent: 'Баланс:',
  });
  const spanValBal = createMyElement('span', {
    className: 'val panel-value panel-value_currency',
    textContent: '27 000',
  });
  const spanBarDate = createMyElement('span', {
    className: 'par panel-par',
    textContent: 'Дата списания:',
  });
  const spanValDate = createMyElement('span', {
    className: 'val panel-value',
    textContent: '28.03.21',
  });
  //перечеь статуса
  liBal.append(spanBarBal, spanValBal);
  liDate.append(spanBarDate, spanValDate);
  ulStatus.append(liBal, liDate);

  //кнопка Пополнить счет
  const divCount = createMyElement('div', {
    className: 'count ctl-count',
  });
  const aCount = createMyElement('a', {
    className: 'btn btn-count',
    id: '"ctl-count-btn',
    href: '#',
  });
  const spanCountTxt = createMyElement('span', {
    className: 'count-txt',
    textContent: 'Пополнить счет',
  });
  aCount.append(spanCountTxt);
  divCount.append(aCount);

  headerPanel.append(ulStatus, divCount);

  //навигация

  const navPanel = createMyElement('nav', {
    className: 'panel-nav',
  });
  const ulMenu = createMyElement('ul', {
    className: 'panel-menu',
  });

  const liMenu = menu.map((item) => {
    console.log('menu.item===', item.id);

    return createMyElement('li', {
      className: 'panel-menu-item',
      id: item.id,
    });
  });
  const aMenu = menu.map((item) => {
    // console.log('menu.item===', item.textContent);

    return createMyElement('a', {
      className: 'panel-menu-link',
      href: item.href,
      textContent: item.textContent,
    });
  });

  for (let i = 0; i < liMenu.length; i++) {
    liMenu[i].append(aMenu[i]);
    //console.log('liMenu: ', liMenu[i]);
  }

  ulMenu.append(...liMenu);
  navPanel.append(ulMenu);
  sectionPanel.append(headerPanel, navPanel);

  return sectionPanel;
};
export default createPanel;

/*
 <section class="panel panel_view p-tl">
    <header class="panel-header">
    <ul class="panel-status">
        <li class="panel-status-item panel-balance panel-balance_limit">
            <span class="par panel-par">Баланс:</span>
            <span class="val panel-value panel-value_currency">27 000</span>	
        </li>
        <li class="panel-status-item panel-date panel-date_limit">
            <span class="par panel-par">Дата списания:</span>
            <span class="val panel-value">28.03.21</span>	
        </li>
    </ul>	
    <div class="ctl-count">	
    <a href="" class="btn btn-count" id="ctl-count-btn"><span>Пополнить счет</span></a>
					</div>
				</header>
				<nav class="panel-nav">
					<ul class="panel-menu">
						<li class="panel-menu-item" id="contracts">
							<a class="panel-menu-link" href="contracts.php">Договора</a>
						</li>
						<li class="panel-menu-item" id="devaces"><a class="panel-menu-link"  href="objects.php" >Объекты</a></li>
						<li class="panel-menu-item" id="operation"><a class="panel-menu-link"  href="">Операции по счету</a></li>
						<li class="panel-menu-item" id="personal"><a class="panel-menu-link"  href="">Личный кабинет</a></li>
					</ul>
				</nav>				
			</section>
*/
