/*
 * @(#)GroupamaDeclarationSinistre.java	1.0		le 13 nov. 2011.
 *
 * Copyright 2006-2009 TBS-Solutions, Tout droit réservé.
 */
package com.tbs.groupama.ws;

import java.util.List;

import javax.jws.WebService;

import com.tbs.groupama.beans.Sinistre;
import com.tbs.groupama.beans.StringsKeyValueBean;
import com.tbs.groupama.utils.GroupamaBusinessException;

/**
 * Interface de déclaration des sinistres
 * 
 * @author Papa
 * @version 1.0
 * @since TBS Framework 2.0
 */
@WebService
public interface GroupamaDeclarationSinistre extends TopGroupamaWs {
	/**
	 * rend true si le nom du voyageur existe dans un dossier
	 * 
	 * @param session
	 * @param numDossier
	 * @param nomVoyageur
	 * @return
	 */
	Sinistre getDossierParNomVoyageur(final String session, final String numDossier, final String nomVoyageur, final String lang)
			throws GroupamaBusinessException;

	/**
	 * 
	 * @param session
	 * @param langue
	 * @param numDossier
	 * @param nomDossier
	 * @return
	 * @throws GroupamaBusinessException
	 */
	Sinistre getSinistre(final String session, final String langue, final String numDossier, final String nomDossier)
			throws GroupamaBusinessException;

	/**
	 * 
	 * @param session
	 * @param numContrat
	 * @param numOption
	 * @return
	 * @throws GroupamaBusinessException
	 */
	byte[] getContrat(final String session, final String numContrat, final String numOption) throws GroupamaBusinessException;

	/**
	 * Déclaration d'un sinistre
	 * 
	 * @param session
	 * @param sinistre
	 * @return
	 * @throws GroupamaBusinessException
	 */
	String declarationSinistre(final String session, final Sinistre sinistre) throws GroupamaBusinessException;

	/**
	 * 
	 * @param session
	 * @param sinistreId
	 * @param contentType
	 * @param fileName
	 * @param content
	 * @return
	 * @throws GroupamaBusinessException
	 */
	String uploadPieceJustifSinistre(final String session, final String sinistreId, final String contentType,
			final String fileName, final byte[] content, final String comment) throws GroupamaBusinessException;

	/**
	 * 
	 * @param session
	 * @param langue
	 * @param npol
	 * @param numdos
	 * @param nomdos
	 * @param numopt
	 * @return
	 * @throws GroupamaBusinessException
	 */
	List<StringsKeyValueBean> typeSinistre(final String session, final String langue, final String npol, final String numdos,
			final String nomdos, final String numopt) throws GroupamaBusinessException;

	/**
	 * 
	 * @param session
	 * @param langue
	 * @param cdtypsin
	 * @param contrat
	 * @param option
	 * @return
	 * @throws GroupamaBusinessException
	 */
	List<StringsKeyValueBean> causeSinistre(final String session, final String langue, String cdtypsin, String contrat,
			String option) throws GroupamaBusinessException;

	/**
	 * nouveau contact
	 * 
	 * @param session
	 * @param nom
	 * @param prenom
	 * @param email
	 * @param sujet
	 * @param corpsMessage
	 * @throws GroupamaBusinessException
	 */
	void nouveauContact(final String session, final String nom, final String prenom, final String email, final String sujet,
			final String corpsMessage) throws GroupamaBusinessException;
	
	List<String[]> getDocUser(String session,String idsin) throws GroupamaBusinessException;
	
	List<Object> getDocument(String session,long idadoc) throws GroupamaBusinessException;
}
