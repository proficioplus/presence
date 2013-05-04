/*
 * @(#)DossierSinistre.java	1.0		le 20 nov. 2011.
 *
 * Copyright 2006-2009 TBS-Solutions, Tout droit réservé.
 */
package com.tbs.groupama.beans;

import java.io.Serializable;

/**
 * Dossier sinistre
 * 
 * @author Papa
 * @version 1.0
 * @since TBS Framework 2.0
 */
public class DossierSinistre implements Serializable {
	/**
	 * 
	 */
	private static final long serialVersionUID = 2681997949076558350L;

	private String nomDossier;

	private String nomPersonne;

	public DossierSinistre() {
	}

	public DossierSinistre(final String nomDossier, final String nomPersonne) {
		this.nomDossier = nomDossier;
		this.nomPersonne = nomPersonne;
	}

	/**
	 * @return the nomDossier
	 */
	public String getNomDossier() {
		return nomDossier;
	}

	/**
	 * @param nomDossier
	 *            the nomDossier to set
	 */
	public void setNomDossier(String nomDossier) {
		this.nomDossier = nomDossier;
	}

	/**
	 * @return the nomPersonne
	 */
	public String getNomPersonne() {
		return nomPersonne;
	}

	/**
	 * @param nomPersonne
	 *            the nomPersonne to set
	 */
	public void setNomPersonne(String nomPersonne) {
		this.nomPersonne = nomPersonne;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see java.lang.Object#hashCode()
	 */
	@Override
	public int hashCode() {
		final int prime = 31;
		int result = 1;
		result = prime * result + ((nomDossier == null) ? 0 : nomDossier.hashCode());
		return result;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see java.lang.Object#equals(java.lang.Object)
	 */
	@Override
	public boolean equals(Object obj) {
		if (this == obj)
			return true;
		if (obj == null)
			return false;
		if (getClass() != obj.getClass())
			return false;
		DossierSinistre other = (DossierSinistre) obj;
		if (nomDossier == null) {
			if (other.nomDossier != null)
				return false;
		} else if (!nomDossier.equals(other.nomDossier))
			return false;
		return true;
	}

	/*
	 * (non-Javadoc)
	 * 
	 * @see java.lang.Object#toString()
	 */
	@Override
	public String toString() {
		return "DossierSinistre [nomDossier=" + nomDossier + ", nomPersonne=" + nomPersonne + "]";
	}
}
