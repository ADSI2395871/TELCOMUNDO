describe('template spec', () => {
  it('passes', () => {
    cy.visit('http://localhost/telcomundo7');
    // Login
    cy.get('[type="text"]').type("12");
    cy.get('[type="password"]').type("1234");
    cy.get('[type="submit"]').click();
  //  Ingreso aplicativo
    cy.get(':nth-child(1) > :nth-child(1) > [href=""]').click(); //Modulo Eliminar 
    cy.get("body > main > section > div > ul:nth-child(1) > li:nth-child(3) > ul > li:nth-child(2) > a").click({force: true}); //Usuario
    cy.get('.input-text').type("1022440976"); //Eliminar Usuario
    cy.get('.Login > input').click(); //Button eliminar
  })
})