describe('template spec', () => {
  it('passes', () => {
    cy.visit('http://localhost/telcomundo7');
    cy.get('[type="text"]').type("12");
    cy.get('[type="password"]').type("1234");
    cy.get('[type="submit"]').click();
    cy.get(':nth-child(1) > :nth-child(1) > [href=""]').click();
   cy.get("body > main > section > div > ul:nth-child(1) > li:nth-child(1) > ul > li:nth-child(3) > a").click({force: true});
   cy.get('.input-text').type("53414"); 
   cy.get('.Login > input').click();
   cy.get(':nth-child(2) > .input-text').type("10"); //Asigancion rol
   cy.get('.alinear-derecha > input').click();
  })
})