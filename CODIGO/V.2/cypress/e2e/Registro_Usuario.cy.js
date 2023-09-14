// import { slowCypressDown } from 'cypress-slow-down'

// slowCypressDown(1000)
describe('template spec', () => {
  it('passes', () => {
    cy.visit('http://localhost/telcomundo7');
    cy.get('[href="UsuarioRegistro.html"]').click();
    cy.get(':nth-child(1) > .input-text').type("14314")
    cy.focused().tab();
    cy.get(':nth-child(2) > .input-text').type(" Manuel")
    cy.focused().tab();
    cy.get(':nth-child(3) > .input-text').type("Sanchez")
    cy.focused().tab();
    cy.get(':nth-child(4) > .input-text').type("32154278")
    cy.focused().tab();
    cy.get(':nth-child(5) > .input-text').type("sanche@gmail.com")
    cy.focused().tab();
    cy.get(':nth-child(6) > .input-text').type("cr30an4-2")
    cy.focused().tab();
    cy.get(':nth-child(7) > .input-text').type("1234")
    cy.focused().tab();
    cy.get(':nth-child(8) > .input-text').type("1234");
    cy.wait(5000);
    cy.get('.alinear-derecha > input').click();


  })
})